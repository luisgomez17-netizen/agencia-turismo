<?php
$listaVentas = $ventas ?? $venta ?? [];
?>

<div class="app-card p-4 mb-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
    <h2 class="h4 fw-bold mb-0">Listado Venta</h2>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr>
          <th>ID Venta</th>
          <th>ID Cliente</th>
          <th>ID Reserva</th>
          <th>IVA</th>
          <th>Valor Total</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($listaVentas)): ?>
          <?php foreach ($listaVentas as $item): ?>
            <?php
              $id = $item['idVenta'] ?? '';
              $idCliente = $item['idCliente'] ?? '';
              $idReserva = $item['idReserva'] ?? '';
              $iva = $item['IVA'] ?? $item['iva'] ?? '';
              $valorTotal = $item['valorTotal'] ?? '';
            ?>
            <tr>
              <td><?= htmlspecialchars((string)$id) ?></td>
              <td><?= htmlspecialchars((string)$idCliente) ?></td>
              <td><?= htmlspecialchars((string)$idReserva) ?></td>
              <td><?= htmlspecialchars((string)$iva) ?></td>
              <td class="fw-semibold"><?= htmlspecialchars((string)$valorTotal) ?></td>
              <td class="text-center text-nowrap">
                <a href="/agencia-turismo/public/ventas/editar?id=<?= urlencode((string)$id) ?>" class="btn btn-warning btn-sm me-1">
                  <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="/agencia-turismo/public/ventas/eliminar?id=<?= urlencode((string)$id) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('¿Seguro que deseas eliminar esta venta?');">
                  <i class="bi bi-trash"></i> Eliminar
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center text-muted py-4">No hay ventas registradas.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="app-card p-4">
  <h3 class="h5 fw-bold mb-3">Venta Consultada</h3>
  <div class="alert alert-secondary mb-0" role="alert">
    No hay información de la venta consultada para mostrar.
  </div>
</div>