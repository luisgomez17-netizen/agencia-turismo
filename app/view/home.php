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
      <a class="navbar-brand fw-bold text-primary d-flex align-items-center gap-2" href="/agencia-turismo/public/">
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
    </div>
  </nav>

  <main class="container pb-5">
    <div id="contenedor-paquetes" class="row g-3"></div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const URL_ENDPOINT = '/agencia-turismo/public/api/paquetes';

    async function cargarPaquetes() {
      const response = await fetch(URL_ENDPOINT);
      const paquetes = await response.json();
      renderizarPaquetes(paquetes);
    }

    function renderizarPaquetes(paquetes) {
      const contenedor = document.getElementById('contenedor-paquetes');
      contenedor.innerHTML = '';

      paquetes.forEach((paquete) => {
        contenedor.innerHTML += `
          <div class="col-md-4">
            <article class="app-card p-3 h-100">
              <h5>${paquete.Nombre}</h5>
              <p class="text-muted">${paquete.Descripcion}</p>
              <p class="mb-0"><strong>Precio:</strong> ${paquete.Precio} · <strong>Duración:</strong> ${paquete.Duracion} días · <strong>Cupos:</strong> ${paquete.CuposDisponibles}</p>
            </article>
          </div>
        `;
      });
    }

    cargarPaquetes();
  </script>
</body>
</html>