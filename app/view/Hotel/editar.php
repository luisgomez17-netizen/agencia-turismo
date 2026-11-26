<?php
$idValor = $registro['idHotel'] ?? '';
?>

<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Editar Hotel</h2>
    <a href="/agencia-turismo/public/hoteles" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Cancelar
    </a>
  </div>

  <form action="/agencia-turismo/public/hoteles/actualizar" method="POST">
    <input type="hidden" name="idHotel" value="<?= htmlspecialchars((string)$idValor) ?>">

    <div class="row g-3">
      <div class="col-md-6">
        <label for="nombre" class="form-label fw-semibold">Nombre del Hotel</label>
        <input type="text" id="nombre" name="nombre" class="form-control"
               value="<?= htmlspecialchars((string)($registro['nombre'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="ubicacion" class="form-label fw-semibold">Ubicación</label>
        <input type="text" id="ubicacion" name="ubicacion" class="form-control"
               value="<?= htmlspecialchars((string)($registro['ubicacion'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="precio" class="form-label fw-semibold">Precio</label>
        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="number" step="0.01" id="precio" name="precio" class="form-control"
                 value="<?= htmlspecialchars((string)($registro['precio'] ?? '')) ?>" required>
        </div>
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check2-square me-1"></i> Actualizar Hotel
      </button>
      <a href="/agencia-turismo/public/hoteles" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>
