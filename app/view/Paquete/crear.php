<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Crear Nuevo Paquete</h2>
    <a href="/agencia-turismo/public/paquete" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Volver
    </a>
  </div>

  <form action="/agencia-turismo/public/paquete/crear" method="POST">
    <div class="row g-3">
      <div class="col-md-6">
        <label for="Nombre" class="form-label fw-semibold">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="Precio" class="form-label fw-semibold">Precio</label>
        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="number" step="0.01" id="Precio" name="Precio" class="form-control" required>
        </div>
      </div>

      <div class="col-12">
        <label for="Descripcion" class="form-label fw-semibold">Descripción</label>
        <textarea id="Descripcion" name="Descripcion" class="form-control" rows="3" required></textarea>
      </div>

      <div class="col-md-6">
        <label for="Duracion" class="form-label fw-semibold">Duración (días)</label>
        <input type="number" id="Duracion" name="Duracion" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="CuposDisponibles" class="form-label fw-semibold">Cupos Disponibles</label>
        <input type="number" id="CuposDisponibles" name="CuposDisponibles" class="form-control" required>
      </div>

      <div class="col-md-4">
        <label for="idGuia" class="form-label fw-semibold">ID Guía</label>
        <input type="number" id="idGuia" name="idGuia" class="form-control">
      </div>

      <div class="col-md-4">
        <label for="paquete_hotel" class="form-label fw-semibold">Paquete Hotel</label>
        <input type="number" id="paquete_hotel" name="paquete_hotel" class="form-control">
      </div>

      <div class="col-md-4">
        <label for="paquete_transporte" class="form-label fw-semibold">Paquete Transporte</label>
        <input type="number" id="paquete_transporte" name="paquete_transporte" class="form-control">
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check-lg me-1"></i> Guardar Paquete
      </button>
      <a href="/agencia-turismo/public/paquete" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>