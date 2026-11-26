<?php
$listaReservas = $reservas ?? $reserva ?? [];
?>

<div class="app-card p-4 mb-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
    <h2 class="h4 fw-bold mb-0">Listado Reservas</h2>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr>
          <th>ID Reserva</th>
          <th>ID Cliente</th>
          <th>ID Paquete</th>
          <th>Fecha</th>
          <th>Cantidad Personas</th>
          <th>Estado</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($listaReservas)): ?>
          <?php foreach ($listaReservas as $item): ?>
            <?php
              $id = $item['idReserva'] ?? '';
              $idCliente = $item['idCliente'] ?? '';
              $idPaquete = $item['idPaquete'] ?? '';
              $fecha = $item['Fecha'] ?? $item['fecha'] ?? '';
              $cantidadPersonas = $item['CantidadPersonas'] ?? $item['cantidadPersonas'] ?? '';
              $estado = $item['Estado'] ?? $item['estado'] ?? '';
            ?>
            <tr>
              <td><?= htmlspecialchars((string)$id) ?></td>
              <td><?= htmlspecialchars((string)$idCliente) ?></td>
              <td><?= htmlspecialchars((string)$idPaquete) ?></td>
              <td><?= htmlspecialchars((string)$fecha) ?></td>
              <td><?= htmlspecialchars((string)$cantidadPersonas) ?></td>
              <td class="fw-semibold"><?= htmlspecialchars((string)$estado) ?></td>
              <td class="text-center text-nowrap">
                <a href="/agencia-turismo/public/reservas/editar?id=<?= urlencode((string)$id) ?>" class="btn btn-warning btn-sm me-1">
                  <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="/agencia-turismo/public/reservas/eliminar?id=<?= urlencode((string)$id) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('¿Seguro que deseas eliminar esta reserva?');">
                  <i class="bi bi-trash"></i> Eliminar
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="7" class="text-center text-muted py-4">No hay reservas registradas.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="app-card p-4">
  <h3 class="h5 fw-bold mb-3">Reserva Consultada</h3>
  <div class="alert alert-secondary mb-0" role="alert">
    No hay información de la reserva consultada para mostrar.
  </div>
</div>