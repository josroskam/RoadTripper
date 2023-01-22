<?php
session_start();
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../models/user.php';

class FeedController extends Controller {
    public function index() {
        require __DIR__ . '/../views/feed/index.php';
    }

    public function about() {
        echo "you've reached the about method of the home controller";
    }
}
?>