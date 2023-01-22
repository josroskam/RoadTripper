<?php
require __DIR__ . '/controller.php';

class FooterController extends Controller {
    public function index() {
        require __DIR__ . '/../views/footer/index.php';
    }
}
?>