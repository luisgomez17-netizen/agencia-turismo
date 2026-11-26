<div class="app-card p-4 mb-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
    <h2 class="h4 fw-bold mb-0">Tabla Paquete</h2>
    
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Duración</th>
          <th>Cupos Disponibles</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($paquetes)): ?>
          <?php foreach ($paquetes as $p): ?>
            <?php
              $id = $p['idPaquete'] ?? '';
              $nombre = $p['Nombre'] ?? $p['nombre'] ?? '';
              $descripcion = $p['Descripcion'] ?? $p['descripcion'] ?? '';
              $precio = $p['Precio'] ?? $p['precio'] ?? 0;
              $duracion = $p['Duracion'] ?? $p['duracion'] ?? 0;
              $cupos = $p['cuposDisponibles'] ?? $p['CuposDisponibles'] ?? 0;
            ?>
            <tr>
              <td><?= htmlspecialchars((string)$id) ?></td>
              <td class="fw-semibold"><?= htmlspecialchars((string)$nombre) ?></td>
              <td><?= htmlspecialchars((string)$descripcion) ?></td>
              <td>$<?= number_format((float)$precio, 2, '.', ',') ?></td>
              <td><?= htmlspecialchars((string)$duracion) ?></td>
              <td><?= htmlspecialchars((string)$cupos) ?></td>
              <td class="text-center text-nowrap">
                <a href="/agencia-turismo/public/paquete/editar?id=<?= urlencode((string)$id) ?>" class="btn btn-warning btn-sm me-1">
                  <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="/agencia-turismo/public/paquete/eliminar?id=<?= urlencode((string)$id) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('¿Seguro que deseas eliminar este paquete?');">
                  <i class="bi bi-trash"></i> Eliminar
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="7" class="text-center text-muted py-4">No hay paquetes registrados.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="app-card p-4">
  <h3 class="h5 fw-bold mb-3">Paquete Consultado</h3>
  <div class="alert alert-secondary mb-0" role="alert">
    No hay información del paquete consultado para mostrar.
  </div>
</div>