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

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<nav>
    <a href="/ciudad">Ciudad</a> |  
    <a href="/cliente">Cliente</a> | 
    <a href="/departamento">Departamento</a> |
    <a href="/empresa">Empresa</a> | 
    <a href="/guia-turi">Guia Turi</a> |
    <a href="/hotel">Hotel</a> | 
    <a href="/pago">Pago</a> |
    <a href="/paquete">Paquete</a> |
    <a href="/reserva">Reserva</a> |
    <a href="/sexo">Sexo</a> |
    <a href="/tipo-documento">Tipo Documento</a> |
    <a href="/tipo-guia">Tipo Guia</a> |
    <a href="/tipo-pago">Tipo Pago</a> |
    <a href="/tipo-sangre">Tipo de Sangre</a> |
    <a href="/tipo-Transporte">Tipos Transporte</a> |
    <a href="/transporte">Transporte</a> |
    <a href="/venta">Venta</a> |
</nav>

<hr>

<?php

if ($method === 'GET' && $uri === '/ciudad') {
    $ciudadController = new CiudadController();
    $ciudadController->index();
}

if ($method === 'GET' && $uri === '/cliente') {
    $clienteController = new ClienteController();
    $clienteController->index();
}

if ($method === 'GET' && $uri === '/departamento') {
    $departamentoController = new DepartamentoController();
    $departamentoController->index();
}


if ($method === 'GET' && $uri === '/empresa') {
    $empresaController = new EmpresaController();
    $empresaController->index();
}

if ($method === 'GET' && $uri === '/guia-turi') {
    $guiaTuriController = new GuiaTuriController();
    $guiaTuriController->index();
}

if ($method === 'GET' && $uri === '/hotel') {
    $hotelController = new HotelController();
    $hotelController->index();
}

if ($method === 'GET' && $uri === '/pago') {
    $pagoController = new PagoController();
    $pagoController->index();
}

if ($method === 'GET' && $uri === '/paquete') {
    $paqueteController = new PaqueteController();
    $paqueteController->index();
}

if ($method === 'GET' && $uri === '/reserva') {
    $reservaController = new ReservaController();
    $reservaController->index();
}

if ($method === 'GET' && $uri === '/sexo') {
    $sexoController = new SexoController();
    $sexoController->index();
}

if ($method === 'GET' && $uri === '/tipo-documento') {
    $tipoDocController = new TipoDocController();
    $tipoDocController->index();
}


if ($method === 'GET' && $uri === '/tipo-guia') {
    $tipoGuiaController = new TipoGuiaController();
    $tipoGuiaController->index();
}

if ($method === 'GET' && $uri === '/tipo-pago') {
    $tipoPagoController = new TipoPagoController();
    $tipoPagoController->index();
}

if ($method === 'GET' && $uri === '/tipo-sangre') {
    $tipoSangreController = new TipoSangreController();
    $tipoSangreController->index();
}

if ($method === 'GET' && $uri === '/tipo-Transporte') {
    $tipoTransporteController = new TipoTransporteController();
    $tipoTransporteController->index();
}

if ($method === 'GET' && $uri === '/transporte') {
    $transporteController = new TransporteController();
    $transporteController->index();
}

if ($method === 'GET' && $uri === '/venta') {
    $ventaController = new VentaController();
    $ventaController->index();
}


// MEtodo GET

if ($method === 'GET' && $uri === '/ciudad/crear') {
    $ciudadController = new CiudadController();
    $ciudadController->crear();
}

if ($method === 'GET' && $uri === '/cliente/crear') {
    $clienteController = new ClienteController();
    $clienteController->crear();
}

if ($method === 'GET' && $uri === '/paquete/crear') {
    $paqueteController = new PaqueteController();
    $paqueteController->crear();
}

// Metodo POST

if ($method === 'POST' && $uri === '/ciudad/guardar') {
    $ciudadController = new CiudadController();
    $ciudadController->guardar();
}

if ($method === 'POST' && $uri === '/departamento/guardar') {
    $departamentoController = new DepartamentoController();
    $departamentoController->guardar();
}

if ($method === 'POST' && $uri === '/empresa/guardar') {
    $empresaController = new EmpresaController();
    $empresaController->guardar();
}

if ($method === 'POST' && $uri === '/guia-turi/guardar') {
    $guiaTuriController = new GuiaTuriController();
    $guiaTuriController->guardar();
}

if ($method === 'POST' && $uri === '/hotel/guardar') {
    $hotelController = new HotelController();
    $hotelController->guardar();
}

if ($method === 'POST' && $uri === '/pago/guardar') {
    $pagoController = new PagoController();
    $pagoController->guardar();
}

if ($method === 'POST' && $uri === '/reserva/guardar') {
    $reservaController = new ReservaController();
    $reservaController->guardar();
}

if ($method === 'POST' && $uri === '/sexo/guardar') {
    $sexoController = new SexoController();
    $sexoController->guardar();
}

if ($method === 'POST' && $uri === '/tipo-documento/guardar') {
    $tipoDocController = new TipoDocController();
    $tipoDocController->guardar();
}

if ($method === 'POST' && $uri === '/tipo-guia/guardar') {
    $tipoGuiaController = new TipoGuiaController();
    $tipoGuiaController->guardar();
}

if ($method === 'POST' && $uri === '/tipo-pago/guardar') {
    $tipoPagoController = new TipoPagoController();
    $tipoPagoController->guardar();
}

if ($method === 'POST' && $uri === '/tipo-sangre/guardar') {
    $tipoSangreController = new TipoSangreController();
    $tipoSangreController->guardar();
}

if ($method === 'POST' && $uri === '/tipo-Transporte/guardar') {
    $tipoTransporteController = new TipoTransporteController();
    $tipoTransporteController->guardar();
}

if ($method === 'POST' && $uri === '/transporte/guardar') {
    $transporteController = new TransporteController();
    $transporteController->guardar();
}

if ($method === 'POST' && $uri === '/venta/guardar') {
    $ventaController = new VentaController();
    $ventaController->guardar();
}


if ($method === 'POST' && $uri === '/cliente/guardar') {
    $clienteController = new ClienteController();
    $clienteController->guardar();
}

if ($method === 'POST' && $uri === '/paquete/guardar') {
    $paqueteController = new PaqueteController();
    $paqueteController->guardar();
}

$ruta = parse_url($uri, PHP_URL_PATH);
if ($ruta === "/paquete/editar" && $method === "GET"){
    $paquete = new PaqueteController();
    $paquete->editar();
}

// Rutas GET para Editar 
if ($method === 'GET' && strpos($uri, '/hotel/editar') === 0) {
    $hotelController = new HotelController();
    $hotelController->editar();
}

if ($method === 'POST' && strpos($uri, '/paquete/actualizar') === 0) {
    $paqueteController = new PaqueteController();
    $paqueteController->actualizar();
}


// Rutas GET para Eliminar Paquete
if ($method === 'GET' && strpos($uri, '/paquete/eliminar') === 0) {
    $paqueteController = new PaqueteController();
    $paqueteController->eliminar();
}

// Ruta GET para mostrar el formulario de edición con los datos actuales
if ($method === 'GET' && strpos($uri, '/paquete/editar') === 0) {
    $paqueteController = new PaqueteController();
    $paqueteController->editar();
}

// Ruta POST para procesar y guardar los cambios en la base de datos
if ($method === 'POST' && strpos($uri, '/paquete/actualizar') === 0) {
    $paqueteController = new PaqueteController();
    $paqueteController->actualizar();
}

?>