<?php

class HomeController {
    public function index() {
        // Cargar la vista principal
        require_once '../app/views/templates/header.php';
        require_once '../app/views/home/index.php';
        require_once '../app/views/templates/footer.php';
    }
}
