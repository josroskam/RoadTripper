<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/userservice.php';

class UserController extends Controller {
    private $userService;
    // initialize services
    function __construct() {
        $this->userService = new UserService();
    }

    // router maps this to /article and /article/index automatically
    public function index()
    {
        $sessionEmail = $_SESSION["email"];

        // Show account information        
        $currentuser = $this->userService->getUserByEmailaddress($sessionEmail);
        $this->displayView($currentuser);

        // Handle post request
        // User needs to verifify password before user can make changes
        if(isset($_POST["passwordCheck"]))
        {
            $this->checkUser($sessionEmail);
        }

        if(isset($_POST["updateAccount"]))
        {        
            $firstname = htmlspecialchars($_POST["newFirstname"]);
            $lastname = htmlspecialchars($_POST["newLastname"]);
            // $emailaddress = $_POST["newEmailaddress"];
            $password = htmlspecialchars($_POST["newPassword"]);
            $hashedPassword = htmlspecialchars(password_hash($password, PASSWORD_DEFAULT));
            $destination = htmlspecialchars($_POST["newDestination"]);

            if($this->emptyInput($firstname, $lastname, $password, $destination)){
                echo "<script>userRegisteredFailed('Fields can not be empty.');</script>";
            } else{       
                $this->updateUser($firstname, $lastname, $hashedPassword, $destination, $sessionEmail);
                echo "<script>updateFormFields();</script>";
            }
        }       
        
        if(isset($_POST["deleteAccount"]))
        {
            $this->deleteUser($sessionEmail);
        }
        // {        
        //     $firstname = htmlspecialchars($_POST["newFirstname"]);
        //     $lastname = htmlspecialchars($_POST["newLastname"]);
        //     // $emailaddress = $_POST["newEmailaddress"];
        //     $password = htmlspecialchars($_POST["newPassword"]);
        //     $hashedPassword = htmlspecialchars(password_hash($password, PASSWORD_DEFAULT));
        //     $destination = htmlspecialchars($_POST["newDestination"]);

        //     if($this->emptyInput($firstname, $lastname, $password, $destination)){
        //         echo "<script>userRegisteredFailed('Fields can not be empty.');</script>";
        //     } else{       
        //         $this->updateUser($firstname, $lastname, $hashedPassword, $destination, $sessionEmail);
        //         echo "<script>updateFormFields();</script>";
        //     }
        // }        
    }

    public function updateUser($firstname, $lastname, $hashedPassword, $destination, $sessionEmail) {
        $this->userService->updateUser($firstname, $lastname, $hashedPassword, $destination, $sessionEmail);
        echo "<script>userRegisteredSuccessfully('Account successfully updated!');</script>";
    }

    private function checkUser($sessionEmail){
        // Check if password is the same
        $passwordToCheck = htmlspecialchars($_POST["passwordToCheck"]);
        // Return true or false
        $bool = $this->userService->checkUserPassword($sessionEmail, $passwordToCheck);

        // If true then the inputs don't have to be readonly anymore
        if($bool != null){
            echo "<script>switchReadonly();</script>";
            echo "<script>showSaveButton();</script>";
            echo "<script>setPasswordValueToNull();</script>"; 
        } else{
            // echo error password is incorrect
            echo "<script>openModal();</script>";
            echo "<script>userRegisteredFailed('Password incorrect');</script>";
        }
    }

    private function emptyInput($firstname, $lastname, $password, $destination){
        if(empty($firstname) || empty($lastname) || empty($password) || empty($destination))
            return true;
        return false;
    }

    private function deleteUser($sessionEmail){
        $this->userService->deleteUser($sessionEmail);
        echo "<script>userRegisteredSuccessfully('Account successfully deleted!');</script>";
        echo "<script>window.location.replace('/logout');</script>";
    }
}
?>