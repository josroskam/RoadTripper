<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../models/user.php';

session_start();
// $_SESSION["loggedin"] = FALSE;
$_SESSION["loginStatus"] = FALSE;

class FeedController extends Controller {
    public function index() {
        require __DIR__ . '/../views/feed/index.php';
        
        // if($_SESSION["loginStatus"] = FALSE){
        //     echo "niet ingelogd";
        // } else{
        //     "wel ingelogd";
        // }
        // echo $_SESSION["emailaddress"];
    }

    public function about() {
        echo "you've reached the about method of the home controller";
    }
}
?>