<?php
class SwitchRouter {
    public function route($uri) {    
        // using a simple switch statement to route URL's to controller methods
        switch($uri) {

            case '': 
                require __DIR__ . '/controllers/feedcontroller.php';
                $controller = new FeedController();
                $controller->index();
                break;

                

            case 'about': 
                require __DIR__ . '/controllers/homecontroller.php';
                $controller = new FeedController();
                $controller->about();
                break;

            default:
                http_response_code(404);
                break;
        }
    }
}
?>