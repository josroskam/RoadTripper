<?php
session_start();
require_once __DIR__ . '/controller.php';
require __DIR__ . '/../services/userservice.php';
require_once __DIR__ . '/../models/user.php';

class LoginController extends Controller {
    private $userService;
    private $user;

    // initialize services
    function __construct() {
        $this->userService = new UserService();
        $this->user = new User();
    }

    public function index() {
        // SESSION IS LOGGED IN?
        // Check if the user is already logged in, if yes then redirect him to FEED page
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            header("location: feed/");
            exit;
        } else{
            require __DIR__ . '/../views/login/index.php';
        }

        if(isset($_POST["Submit"])){
            $this->Login();
        }

        if (isset($_GET['hello'])) {
            $this->logout();
          }
          
    }

    public function about() {
        // echo "you've reached the about method of the home controller";
    }

    public function Login(){
        // echo $_POST["emailaddress"];
        $user = $this->userService->getUser($_POST["emailaddress"], $_POST["password"]);

        // $user = (object)$user;
        
        // Store data in session variables
        // $student = User::User($user[0],"","","","","");

        if($user == null){
            $_SESSION["loggedin"] = false;
            // $this->setSessionInfo();
            echo "<span class= 'error'>Invalid username or password.</span>";
        } else{
            $_SESSION["emailaddress"] = $_POST["emailaddress"];
            $_SESSION["password"] = $_POST["password"];

            $_SESSION["loggedin"] = true;
            echo "<script>window.location.href='/feed'</script>";
        }        
    }
    public function logout(){
        session_destroy();
    }
}
?>