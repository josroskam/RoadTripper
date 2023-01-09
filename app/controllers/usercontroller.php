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
    public function index() {
        $userIsLoggedIn = false;
        if(!$userIsLoggedIn){

        } else {
            $users = $this->userService->getAll();
            $this->displayView($users);
        }
        // retrieve data 
    
        // show view, param = accessible as $model in the view
        // displayView maps this to /views/article/index.php automatically
        
    }

    public function about() {
        echo "you've reached the about method of the home controller";
    }
}
?>