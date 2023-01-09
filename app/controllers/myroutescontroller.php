<?php
require __DIR__ . '/controller.php';

class MyRoutesController extends Controller {
    public function index() {
        require __DIR__ . '/../views/myroutes/index.php';
    }

    public function about() {
        echo "you've reached the about method of the home controller";
    }
}
?>