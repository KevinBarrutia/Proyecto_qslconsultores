<?php

// Carga el controlador principal
require_once '../app/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
