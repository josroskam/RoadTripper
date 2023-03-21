<?php
require_once __DIR__ . '/controller.php';
require __DIR__ . '/../services/userservice.php';
require_once __DIR__ . '/../models/user.php';

class LoginController extends Controller {
    private $userService;

    // initialize services
    function __construct() {
        $this->userService = new UserService();
    }

    public function index() {
        if(isset($_SESSION["firstname"])){
            ?><script>window.location = '/feed';</script><?php
        } else {
            require __DIR__ . '/../views/login/index.php';
            if (isset($_POST["LoginUser"])) {
                $this->setLoginUserVariables();
            }

            if (isset($_POST["SubmitNewUser"])) {
                $this->setNewUserVariables();
            }

            if (isset($_POST["logout"])) {
                ?><script>window.location = '/logout';</script><?php
            } 
        } 
    }

    private function setNewUserVariables(){
        $firstname = htmlspecialchars($_POST["firstname"]);
                $lastname = htmlspecialchars($_POST["lastname"]);
                $emailaddress = htmlspecialchars($_POST["email"]);
                $password = htmlspecialchars($_POST["hashedpassword"]);
                $passwordrepeat = htmlspecialchars($_POST["passwordrepeat"]);
                $favorite_holiday_destination = htmlspecialchars($_POST["destination"]);
                $this->signupUser($firstname, $lastname, $emailaddress, $password, $passwordrepeat, $favorite_holiday_destination);
    }

    private function setLoginUserVariables(){
        $emailaddress = htmlspecialchars($_POST["email"]);
                $password = htmlspecialchars($_POST["hashedpassword"]);
                $this->Login($emailaddress, $password);
    }

    private function signupUser($firstname, $lastname, $emailaddress, $password, $passwordrepeat, $favorite_holiday_destination){       
        if($this->emptyInput($firstname, $lastname, $emailaddress, $password, $passwordrepeat, $favorite_holiday_destination) == false)
            echo "<script>userRegisteredFailed('Fields can not be empty!');</script>";
        else if($this->invalidEmail($emailaddress) == false)
            echo "<script>userRegisteredFailed('Emailaddress is invalid');</script>";
        else if($this->pwdMatch($password, $passwordrepeat) == false)
            echo "<script>userRegisteredFailed('Passwords do not match');</script>";
        else if($this->EmailTaken($emailaddress) == false)
            echo "<script>userRegisteredFailed('Emailaddress is already taken');</script>";
        else {
            $this->setUser($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination);
        }
    }

    private function emptyInput($firstname, $lastname, $emailaddress, $password, $passwordrepeat, $favorite_holiday_destination){
        if(empty($firstname) || empty($lastname) || empty($emailaddress) || empty($password) || empty($passwordrepeat) || empty($favorite_holiday_destination))
            return false;
        return true;
    }
    
    private function invalidEmail($emailaddress){
        if(!filter_var($emailaddress, FILTER_VALIDATE_EMAIL))        
            return false;
        return true;
    }

    private function pwdMatch($password, $passwordrepeat){
        if($password !== $passwordrepeat)
            return false;
        return true;
    }

    private function EmailTaken($emailaddress){
        if($this->userService->checkUserExists($emailaddress))
            return false;
        return true;
    }

    private function setUser($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination){
        // hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->userService->insert($firstname, $lastname, $emailaddress, $hashedPassword, $favorite_holiday_destination);
        echo "<script>userRegisteredSuccessfully();</script>";
    }

    public function Login($email, $password){
        if($this->emptyLoginInput($email, $password) == false){
            echo "<script>userRegisteredFailed('Fields can not be empty!');</script>";
        } else{
            if($this->userService->getUser($email, $password) == false){
                echo "<script>userRegisteredFailed('Invalid login credintials, please try again.');</script>";
            }
        }
    }

    private function emptyLoginInput($email, $password){
        if(empty($email) || empty($password))
            return false;
        return true;
    }
}
?>