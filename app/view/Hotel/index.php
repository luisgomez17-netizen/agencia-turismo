<?php
$listaHoteles = $hoteles ?? $hotel ?? [];
?>

<div class="app-card p-4 mb-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
    <h2 class="h4 fw-bold mb-0">Listado Hoteles</h2>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr>
          <th>ID Hotel</th>
          <th>Nombre</th>
          <th>Ubicación</th>
          <th>Precio</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($listaHoteles)): ?>
          <?php foreach ($listaHoteles as $item): ?>
            <?php
              $id = $item['idHotel'] ?? '';
              $nombre = $item['nombre'] ?? '';
              $ubicacion = $item['ubicacion'] ?? '';
              $precio = $item['precio'] ?? '';
            ?>
            <tr>
              <td><?= htmlspecialchars((string)$id) ?></td>
              <td class="fw-semibold"><?= htmlspecialchars((string)$nombre) ?></td>
              <td><?= htmlspecialchars((string)$ubicacion) ?></td>
              <td><?= htmlspecialchars((string)$precio) ?></td>
              <td class="text-center text-nowrap">
                <a href="/agencia-turismo/public/hoteles/editar?id=<?= urlencode((string)$id) ?>" class="btn btn-warning btn-sm me-1">
                  <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="/agencia-turismo/public/hoteles/eliminar?id=<?= urlencode((string)$id) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('¿Seguro que deseas eliminar este hotel?');">
                  <i class="bi bi-trash"></i> Eliminar
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center text-muted py-4">No hay hoteles registrados.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="app-card p-4">
  <h3 class="h5 fw-bold mb-3">Hotel Consultado</h3>
  <div class="alert alert-secondary mb-0" role="alert">
    No hay información del hotel consultado para mostrar.
  </div>
</div>