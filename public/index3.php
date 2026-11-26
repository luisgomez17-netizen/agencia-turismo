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
$ruta = parse_url($uri, PHP_URL_PATH) ?: '/';

// Quita automáticamente /agencia-turismo/public para que coincida con rutas/web.php
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($basePath !== '/' && $basePath !== '' && strpos($ruta, $basePath) === 0) {
    $ruta = substr($ruta, strlen($basePath));
}
$ruta = '/' . trim($ruta, '/');
if ($ruta !== '/') {
    $ruta = rtrim($ruta, '/');
}

$enrutamiento = $rutas[$method][$ruta] ?? null;

ob_start();
$noEncontrado = false;

if ($enrutamiento) {
    $controladorNombre = $enrutamiento[0];
    $accion = $enrutamiento[1];

    if (class_exists($controladorNombre)) {
        $controlador = new $controladorNombre();
        $controlador->$accion();
    } else {
        $noEncontrado = true;
    }
} else {
    $noEncontrado = true;
}

$contenidoVista = ob_get_clean();

if ($noEncontrado) {
    http_response_code(404);
    $contenidoVista = '<div class="app-card p-4"><div class="alert alert-warning mb-0">Ruta no encontrada o controlador pendiente.</div></div>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agencia de Turismo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    body {
      background-color: #f4f6f9;
    }
    .app-card {
      background: #ffffff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary d-flex align-items-center gap-2" href="/agencia-turismo/public/paquete">
        <i class="bi bi-compass-fill fs-4"></i>
        <span>AgenciaTurismo</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAgencia">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarAgencia">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">
          <li class="nav-item">
            <a class="nav-link" href="/agencia-turismo/public/">Inicio</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Paquetes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agencia-turismo/public/paquete">Listado Paquetes</a></li>
              <li><a class="dropdown-item" href="/agencia-turismo/public/paquete/crear">Crear Paquete</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Clientes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agencia-turismo/public/clientes">Listado Clientes</a></li>
              <li><a class="dropdown-item" href="/agencia-turismo/public/clientes/crear">Crear Cliente</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Proveedores
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agencia-turismo/public/proveedores">Listado Proveedores</a></li>
              <li><a class="dropdown-item" href="/agencia-turismo/public/proveedores/crear">Crear Proveedor</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Ventas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agencia-turismo/public/ventas">Listado Ventas</a></li>
              <li><a class="dropdown-item" href="/agencia-turismo/public/ventas/crear">Crear Venta</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Hoteles
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agencia-turismo/public/hoteles">Listado Hoteles</a></li>
              <li><a class="dropdown-item" href="/agencia-turismo/public/hoteles/crear">Crear Hotel</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Reservas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agencia-turismo/public/reservas">Listado Reservas</a></li>
              <li><a class="dropdown-item" href="/agencia-turismo/public/reservas/crear">Crear Reserva</a></li>
            </ul>
          </li>
          
        </ul>
    </div>
  </nav>

  <main class="container pb-5">
    <?= $contenidoVista ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>