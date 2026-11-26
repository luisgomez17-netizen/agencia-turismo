<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Crear Nueva Venta</h2>
    <a href="/agencia-turismo/public/ventas" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Volver
    </a>
  </div>

  <form action="/agencia-turismo/public/ventas/crear" method="POST">
    <div class="row g-3">
      <div class="col-md-6">
        <label for="idCliente" class="form-label fw-semibold">ID Cliente</label>
        <input type="number" id="idCliente" name="idCliente" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="idReserva" class="form-label fw-semibold">ID Reserva</label>
        <input type="number" id="idReserva" name="idReserva" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="IVA" class="form-label fw-semibold">IVA</label>
        <input type="number" step="0.01" id="IVA" name="IVA" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="valorTotal" class="form-label fw-semibold">Valor Total</label>
        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="number" step="0.01" id="valorTotal" name="valorTotal" class="form-control" required>
        </div>
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check-lg me-1"></i> Guardar Venta
      </button>
      <a href="/agencia-turismo/public/ventas" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>