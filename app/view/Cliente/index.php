<?php
$listaClientes = $clientes ?? $cliente ?? [];
?>

<div class="app-card p-4 mb-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
    <h2 class="h4 fw-bold mb-0">Listado Cliente</h2>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Tipo Doc</th>
          <th>Documento</th>
          <th>Correo</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Ciudad</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($listaClientes)): ?>
          <?php foreach ($listaClientes as $item): ?>
            <?php
              $id = $item['idCliente'] ?? '';
              $nombre = $item['nombre'] ?? $item['Nombre'] ?? '';
              $apellido = $item['apellido'] ?? $item['Apellido'] ?? '';
              $tipoDoc = $item['idTipoDoc'] ?? '';
              $documento = $item['numDoc'] ?? $item['numeroDocumento'] ?? '';
              $correo = $item['correo'] ?? $item['Correo'] ?? '';
              $telefono = $item['telefono'] ?? $item['Telefono'] ?? '';
              $direccion = $item['direccion'] ?? $item['Direccion'] ?? '';
              $ciudad = $item['idCiudad'] ?? '';
            ?>
            <tr>
              <td><?= htmlspecialchars((string)$id) ?></td>
              <td class="fw-semibold"><?= htmlspecialchars((string)$nombre) ?></td>
              <td><?= htmlspecialchars((string)$apellido) ?></td>
              <td><?= htmlspecialchars((string)$tipoDoc) ?></td>
              <td><?= htmlspecialchars((string)$documento) ?></td>
              <td><?= htmlspecialchars((string)$correo) ?></td>
              <td><?= htmlspecialchars((string)$telefono) ?></td>
              <td><?= htmlspecialchars((string)$direccion) ?></td>
              <td><?= htmlspecialchars((string)$ciudad) ?></td>
              <td class="text-center text-nowrap">
                <a href="/agencia-turismo/public/clientes/editar?id=<?= urlencode((string)$id) ?>" class="btn btn-warning btn-sm me-1">
                  <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="/agencia-turismo/public/clientes/eliminar?id=<?= urlencode((string)$id) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('¿Seguro que deseas eliminar este cliente?');">
                  <i class="bi bi-trash"></i> Eliminar
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="10" class="text-center text-muted py-4">No hay clientes registrados.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="app-card p-4">
  <h3 class="h5 fw-bold mb-3">Cliente Consultado</h3>
  <div class="alert alert-secondary mb-0" role="alert">
    No hay información del cliente consultado para mostrar.
  </div>
</div>