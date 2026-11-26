<?php
$idMostrar = $registro['idHotel'] ?? ($_GET['id'] ?? '');
$nombreMostrar = $registro['nombre'] ?? '';
?>

<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold text-danger mb-0">Confirmar Eliminación</h2>
    <a href="/agencia-turismo/public/hoteles" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Cancelar
    </a>
  </div>

  <p class="mb-4">
    ¿Seguro que deseas eliminar el hotel <strong><?= htmlspecialchars((string)($nombreMostrar ?: ('#' . $idMostrar))) ?></strong>? Esta acción no se puede deshacer.
  </p>

  <form action="/agencia-turismo/public/hoteles/eliminar" method="POST" class="d-flex gap-2">
    <input type="hidden" name="id" value="<?= htmlspecialchars((string)$idMostrar) ?>">
    <button type="submit" class="btn btn-danger">
      <i class="bi bi-trash me-1"></i> Sí, Eliminar
    </button>
    <a href="/agencia-turismo/public/hoteles" class="btn btn-outline-secondary">
      Cancelar
    </a>
  </form>
</div>