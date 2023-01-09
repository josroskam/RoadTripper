<?php
require __DIR__ . '/controller.php';

class HeaderController extends Controller {
    public function index() {
        require __DIR__ . '/../views/header/index.php';
    }
}
?>