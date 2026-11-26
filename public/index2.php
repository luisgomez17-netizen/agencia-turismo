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

$method =$_SERVER['REQUEST_METHOD'];
$uri =$_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH) ?: '/';

// Quita /agencia-turismo/public para que el switch evalúe rutas limpias como /paquete
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($basePath !== '/' && $basePath !== '' && strpos($ruta, $basePath) === 0) {$ruta = substr($ruta, strlen($basePath));
}
$ruta = '/' . trim($ruta, '/');
if ($ruta !== '/') {
    $ruta = rtrim($ruta, '/');
}

// Ejecuta acciones POST o redirecciones antes de enviar HTML
ob_start();
$rutaEncontrada = true;

switch ($ruta) {
    case '/':
        if ($method === 'GET') {
            $controller = new PaqueteController();$controller->index();
        } else {
            $rutaEncontrada = false;
        }
        break;

    /* --- PAQUETES --- */
    case '/paquete':
        if ($method === 'GET') {
            $controller = new PaqueteController();$controller->index();
        } elseif ($method === 'POST') {
            $controller = new PaqueteController();$controller->guardar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    case '/paquete/crear':
        if ($method === 'GET') {
            $controller = new PaqueteController();$controller->crear();
        } elseif ($method === 'POST') {
            $controller = new PaqueteController();$controller->guardar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    case '/paquete/editar':
        if ($method === 'GET') {
            $controller = new PaqueteController();$controller->editar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    case '/paquete/actualizar':
        if ($method === 'POST') {
            $controller = new PaqueteController();$controller->actualizar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    case '/paquete/eliminar':
        if ($method === 'GET' \vert{}\vert{}$method === 'POST') {
            $controller = new PaqueteController();$controller->eliminar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    /* --- CLIENTES --- */
    case '/clientes':
        if ($method === 'GET') {
            $controller = new ClienteController();$controller->index();
        } elseif ($method === 'POST') {
            $controller = new ClienteController();$controller->guardar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    case '/clientes/crear':
        if ($method === 'GET') {
            $controller = new ClienteController();$controller->crear();
        } else {
            $rutaEncontrada = false;
        }
        break;

    /* --- HOTELES --- */
    case '/hoteles':
        if ($method === 'GET') {
            $controller = new HotelController();$controller->index();
        } elseif ($method === 'POST') {
            $controller = new HotelController();$controller->guardar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    /* --- TRANSPORTE --- */
    case '/transporte':
        if ($method === 'GET') {
            $controller = new TransporteController();$controller->index();
        } elseif ($method === 'POST') {
            $controller = new TransporteController();$controller->guardar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    /* --- RESERVAS --- */
    case '/reservas':
        if ($method === 'GET') {
            $controller = new ReservaController();$controller->index();
        } elseif ($method === 'POST') {
            $controller = new ReservaController();$controller->guardar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    /* --- VENTAS --- */
    case '/ventas':
        if ($method === 'GET') {
            $controller = new VentaController();$controller->index();
        } elseif ($method === 'POST') {
            $controller = new VentaController();$controller->guardar();
        } else {
            $rutaEncontrada = false;
        }
        break;

    default:
        $rutaEncontrada = false;
        break;
}

$contenidoVista = ob_get_clean();

if (!$rutaEncontrada) {
    http_response_code(404);
    $contenidoVista = "Ruta no encontrada";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Turismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/agencia-turismo/public/paquete">Agencia Turismo</a>
            <div class="d-flex flex-wrap gap-2">
                <a href="/agencia-turismo/public/paquete" class="btn btn-outline-light btn-sm">Paquetes</a>
                <a href="/agencia-turismo/public/paquete/crear" class="btn btn-primary btn-sm">Crear Paquete</a>
                <a href="/agencia-turismo/public/clientes" class="btn btn-outline-light btn-sm">Clientes</a>
                <a href="/agencia-turismo/public/hoteles" class="btn btn-outline-light btn-sm">Hoteles</a>
                <a href="/agencia-turismo/public/transporte" class="btn btn-outline-light btn-sm">Transporte</a>
                <a href="/agencia-turismo/public/reservas" class="btn btn-outline-light btn-sm">Reservas</a>
                <a href="/agencia-turismo/public/ventas" class="btn btn-outline-light btn-sm">Ventas</a>