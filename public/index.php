<?php

require_once __DIR__ . "/../app/controllers/HotelController.php";
require_once __DIR__ . "/../app/controllers/PaqueteController.php";




$controller = new HotelController();
$controller->index();

$categoriaController = new PaqueteController();
$categoriaController->index();





