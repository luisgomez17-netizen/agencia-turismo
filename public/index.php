<?php

require_once __DIR__ . "/../app/controllers/HotelController.php";
require_once __DIR__ . "/../app/controllers/PaqueteController.php";
require_once __DIR__ . "/../app/controllers/CiudadController.php";
require_once __DIR__ . "/../app/controllers/DepartamentoController.php";
require_once __DIR__ . "/../app/controllers/EmpresaController.php";
require_once __DIR__ . "/../app/controllers/TipoDocController.php";
require_once __DIR__ . "/../app/controllers/TipoSangreController.php";




$controller = new HotelController();
$controller->index();

$controller = new PaqueteController();
$controller->index();

$controller = new CiudadController();
$controller->index();

$controller = new DepartamentoController();
$controller->index();

$controller = new EmpresaController();
$controller->index();

$controller = new TipoDocController();
$controller->index();

$controller = new TipoSangreController();
$controller->index();




