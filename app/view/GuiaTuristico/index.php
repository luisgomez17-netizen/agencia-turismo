<?php
$listaGuias = $guias ?? [];
?>

<div class="app-card p-4 mb-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
    <h2 class="h4 fw-bold mb-0">Listado Guía Turístico</h2>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Tipo Guía</th>
          <th>Ciudad</th>
          <th>Departamento</th>
          <th>Razón Social</th>
          <th>Nombre Proveedor</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($listaGuias)): ?>
          <?php foreach ($listaGuias as $item): ?>
            <?php
              $id = $item['idGuiaTuristico'] ?? '';
              $tipoGuia = $item['idTipoGuia'] ?? '';
              $ciudad = $item['idCiudad'] ?? '';
              $departamento = $item['idDepartamento'] ?? '';
              $razonSocial = $item['razonSocial'] ?? '';
              $nombreProveedor = $item['nombreProveedor'] ?? '';
              $direccion = $item['direccion'] ?? '';
              $telefono = $item['Telefono'] ?? $item['telefono'] ?? '';
            ?>
            <tr>
              <td><?= htmlspecialchars((string)$id) ?></td>
              <td><?= htmlspecialchars((string)$tipoGuia) ?></td>
              <td><?= htmlspecialchars((string)$ciudad) ?></td>
              <td><?= htmlspecialchars((string)$departamento) ?></td>
              <td class="fw-semibold"><?= htmlspecialchars((string)$razonSocial) ?></td>
              <td><?= htmlspecialchars((string)$nombreProveedor) ?></td>
              <td><?= htmlspecialchars((string)$direccion) ?></td>
              <td><?= htmlspecialchars((string)$telefono) ?></td>
              <td class="text-center text-nowrap">
                <a href="/agencia-turismo/public/proveedores/editar?id=<?= urlencode((string)$id) ?>" class="btn btn-warning btn-sm me-1">
                  <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="/agencia-turismo/public/proveedores/eliminar?id=<?= urlencode((string)$id) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('¿Seguro que deseas eliminar este registro?');">
                  <i class="bi bi-trash"></i> Eliminar
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="9" class="text-center text-muted py-4">No hay guías turísticos registrados.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="app-card p-4">
  <h3 class="h5 fw-bold mb-3">Guía Turístico Consultado</h3>
  <div class="alert alert-secondary mb-0" role="alert">
    No hay información del guía turístico consultado para mostrar.
  </div>
</div>