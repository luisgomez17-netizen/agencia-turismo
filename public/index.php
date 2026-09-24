<?php

require_once __DIR__ . '/../app/controllers/HotelController.php';
require_once __DIR__ . '/../app/controllers/PaqueteController.php';
require_once __DIR__ . '/../app/controllers/CiudadController.php';
require_once __DIR__ . '/../app/controllers/DepartamentoController.php';
require_once __DIR__ . '/../app/controllers/EmpresaController.php';
require_once __DIR__ . '/../app/controllers/TipoDocController.php';
require_once __DIR__ . '/../app/controllers/TipoSangreController.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<nav>
    <a href="/hoteles">Hoteles</a> | 
    <a href="/paquetes">Paquetes</a> | 
    <a href="/ciudades">Ciudades</a> | 
    <a href="/departamentos">Departamentos</a> | 
    <a href="/empresas">Empresas</a> | 
    <a href="/tipos-doc">Tipos de Documento</a> | 
    <a href="/tipos-sangre">Tipos de Sangre</a>
</nav>

<hr>

<?php

if ($method === 'GET' && ($uri === '/' || $uri === '/hoteles')) {
    $hotelController = new HotelController();
    $hotelController->index();
}

if ($method === 'GET' && $uri === '/paquetes') {
    $paqueteController = new PaqueteController();
    $paqueteController->index();
}

if ($method === 'GET' && $uri === '/ciudades') {
    $ciudadController = new CiudadController();
    $ciudadController->index();
}

if ($method === 'GET' && $uri === '/departamentos') {
    $departamentoController = new DepartamentoController();
    $departamentoController->index();
}

if ($method === 'GET' && $uri === '/empresas') {
    $empresaController = new EmpresaController();
    $empresaController->index();
}

if ($method === 'GET' && $uri === '/tipos-doc') {
    $tipoDocController = new TipoDocController();
    $tipoDocController->index();
}

if ($method === 'GET' && $uri === '/tipos-sangre') {
    $tipoSangreController = new TipoSangreController();
    $tipoSangreController->index();
}

?>