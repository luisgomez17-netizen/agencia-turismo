<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Crear Nuevo Cliente</h2>
    <a href="/agencia-turismo/public/clientes" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Volver
    </a>
  </div>

  <form action="/agencia-turismo/public/clientes/crear" method="POST">
    <div class="row g-3">
      <div class="col-md-6">
        <label for="nombre" class="form-label fw-semibold">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="apellido" class="form-label fw-semibold">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="idTipoDoc" class="form-label fw-semibold">ID Tipo Documento</label>
        <input type="number" id="idTipoDoc" name="idTipoDoc" class="form-control" placeholder="Ej. 1 (CC), 2 (TI)" required>
      </div>

      <div class="col-md-6">
        <label for="numDoc" class="form-label fw-semibold">Número de Documento</label>
        <input type="text" id="numDoc" name="numDoc" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="correo" class="form-label fw-semibold">Correo</label>
        <input type="email" id="correo" name="correo" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="telefono" class="form-label fw-semibold">Teléfono</label>
        <input type="text" id="telefono" name="telefono" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="direccion" class="form-label fw-semibold">Dirección</label>
        <input type="text" id="direccion" name="direccion" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="idCiudad" class="form-label fw-semibold">ID Ciudad</label>
        <input type="number" id="idCiudad" name="idCiudad" class="form-control" placeholder="Ej. 1, 2, 5..." required>
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check-lg me-1"></i> Guardar Cliente
      </button>
      <a href="/agencia-turismo/public/clientes" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>