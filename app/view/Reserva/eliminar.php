<?php
$idMostrar = $registro['idReserva'] ?? ($_GET['id'] ?? '');
?>

<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold text-danger mb-0">Confirmar Eliminación</h2>
    <a href="/agencia-turismo/public/reservas" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Cancelar
    </a>
  </div>

  <p class="mb-4">
    ¿Seguro que deseas eliminar la reserva <strong>#<?= htmlspecialchars((string)$idMostrar) ?></strong>? Esta acción no se puede deshacer.
  </p>

  <form action="/agencia-turismo/public/reservas/eliminar" method="POST" class="d-flex gap-2">
    <input type="hidden" name="id" value="<?= htmlspecialchars((string)$idMostrar) ?>">
    <button type="submit" class="btn btn-danger">
      <i class="bi bi-trash me-1"></i> Sí, Eliminar
    </button>
    <a href="/agencia-turismo/public/reservas" class="btn btn-outline-secondary">
      Cancelar
    </a>
  </form>
</div>