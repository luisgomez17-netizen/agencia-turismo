<?php


require_once __DIR__ . '/../app/controllers/CiudadController.php';
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . '/../app/controllers/DepartamentoController.php';
require_once __DIR__ . '/../app/controllers/EmpresaController.php';
require_once __DIR__ . '/../app/controllers/GuiaTuriController.php';
require_once __DIR__ . '/../app/controllers/HotelController.php';
require_once __DIR__ . '/../app/controllers/PagoController.php';
require_once __DIR__ . '/../app/controllers/PaqueteController.php';
require_once __DIR__ . '/../app/controllers/ReservaController.php';
require_once __DIR__ . '/../app/controllers/SexoController.php';
require_once __DIR__ . '/../app/controllers/TipoDocController.php';
require_once __DIR__ . '/../app/controllers/TipoGuiaController.php';
require_once __DIR__ . '/../app/controllers/TipoPagoController.php';
require_once __DIR__ . '/../app/controllers/TipoSangreController.php';
require_once __DIR__ . '/../app/controllers/TipoTransporteController.php';
require_once __DIR__ . '/../app/controllers/TransporteController.php';
require_once __DIR__ . '/../app/controllers/VentaController.php';

$rutas = require_once dirname(__DIR__) . "/rutas/web.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$enrutamiento = $rutas[$method][$ruta] ?? null;

if ($enrutamiento != null) {
    $ncontrolador = $enrutamiento[0];
    $nMetodo = $enrutamiento[1];

    $controlador = new $ncontrolador();
    $controlador->$nMetodo();

} else {

    echo "Ruta no encontrada";

}

?>