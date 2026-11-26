<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Editar Paquete</h2>
    <a href="/agencia-turismo/public/paquete" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Cancelar
    </a>
  </div>

  <form action="/agencia-turismo/public/paquete/actualizar" method="POST">
    <input type="hidden" name="idPaquete" value="<?= htmlspecialchars((string)($paquete['idPaquete'] ?? '')) ?>">

    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label fw-semibold">Nombre:</label>
        <input type="text" name="Nombre" class="form-control"
               value="<?= htmlspecialchars((string)($paquete['Nombre'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">Descripción:</label>
        <input type="text" name="Descripcion" class="form-control"
               value="<?= htmlspecialchars((string)($paquete['Descripcion'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">Precio:</label>
        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="number" step="0.01" name="Precio" class="form-control"
                 value="<?= htmlspecialchars((string)($paquete['Precio'] ?? '')) ?>" required>
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">Duración (días):</label>
        <input type="number" name="Duracion" class="form-control"
               value="<?= htmlspecialchars((string)($paquete['Duracion'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">Cupos Disponibles:</label>
        <input type="number" name="cuposDisponibles" class="form-control"
               value="<?= htmlspecialchars((string)($paquete['cuposDisponibles'] ?? $paquete['CuposDisponibles'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">ID Guía:</label>
        <input type="number" name="idGuia" class="form-control"
               value="<?= htmlspecialchars((string)($paquete['idGuia'] ?? '')) ?>">
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">ID Hotel:</label>
        <input type="number" name="paquete_hotel" class="form-control"
               value="<?= htmlspecialchars((string)($paquete['paquete_hotel'] ?? '')) ?>">
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">ID Transporte:</label>
        <input type="number" name="paquete_transporte" class="form-control"
               value="<?= htmlspecialchars((string)($paquete['paquete_transporte'] ?? '')) ?>">
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check2-square me-1"></i> Actualizar Paquete
      </button>
      <a href="/agencia-turismo/public/paquete" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>


