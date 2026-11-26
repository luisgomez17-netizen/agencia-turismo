<?php
$idValor = $registro['idReserva'] ?? '';
?>

<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Editar Reserva</h2>
    <a href="/agencia-turismo/public/reservas" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Cancelar
    </a>
  </div>

  <form action="/agencia-turismo/public/reservas/actualizar" method="POST">
    <input type="hidden" name="idReserva" value="<?= htmlspecialchars((string)$idValor) ?>">

    <div class="row g-3">
      <div class="col-md-6">
        <label for="idCliente" class="form-label fw-semibold">ID Cliente</label>
        <input type="number" id="idCliente" name="idCliente" class="form-control"
               value="<?= htmlspecialchars((string)($registro['idCliente'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="idPaquete" class="form-label fw-semibold">ID Paquete</label>
        <input type="number" id="idPaquete" name="idPaquete" class="form-control"
               value="<?= htmlspecialchars((string)($registro['idPaquete'] ?? '')) ?>" required>
      </div>

      <div class="col-md-4">
        <label for="Fecha" class="form-label fw-semibold">Fecha</label>
        <input type="date" id="Fecha" name="Fecha" class="form-control"
               value="<?= htmlspecialchars((string)($registro['Fecha'] ?? $registro['fecha'] ?? '')) ?>" required>
      </div>

      <div class="col-md-4">
        <label for="CantidadPersonas" class="form-label fw-semibold">Cantidad de Personas</label>
        <input type="number" min="1" id="CantidadPersonas" name="CantidadPersonas" class="form-control"
               value="<?= htmlspecialchars((string)($registro['CantidadPersonas'] ?? $registro['cantidadPersonas'] ?? '')) ?>" required>
      </div>

      <div class="col-md-4">
        <label for="Estado" class="form-label fw-semibold">Estado</label>
        <input type="text" id="Estado" name="Estado" class="form-control"
               value="<?= htmlspecialchars((string)($registro['Estado'] ?? $registro['estado'] ?? '')) ?>" required>
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check2-square me-1"></i> Actualizar Reserva
      </button>
      <a href="/agencia-turismo/public/reservas" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>