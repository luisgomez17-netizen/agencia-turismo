<?php
$idValor = $registro['idGuiaTuristico'] ?? '';
?>

<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Editar Guía Turístico</h2>
    <a href="/agencia-turismo/public/proveedores" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Cancelar
    </a>
  </div>

  <form action="/agencia-turismo/public/proveedores/actualizar" method="POST">
    <input type="hidden" name="idGuiaTuristico" value="<?= htmlspecialchars((string)$idValor) ?>">

    <div class="row g-3">
      <div class="col-md-4">
        <label for="idTipoGuia" class="form-label fw-semibold">ID Tipo Guía</label>
        <input type="number" id="idTipoGuia" name="idTipoGuia" class="form-control"
               value="<?= htmlspecialchars((string)($registro['idTipoGuia'] ?? '')) ?>" required>
      </div>

      <div class="col-md-4">
        <label for="idCiudad" class="form-label fw-semibold">ID Ciudad</label>
        <input type="number" id="idCiudad" name="idCiudad" class="form-control"
               value="<?= htmlspecialchars((string)($registro['idCiudad'] ?? '')) ?>" required>
      </div>

      <div class="col-md-4">
        <label for="idDepartamento" class="form-label fw-semibold">ID Departamento</label>
        <input type="number" id="idDepartamento" name="idDepartamento" class="form-control"
               value="<?= htmlspecialchars((string)($registro['idDepartamento'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="razonSocial" class="form-label fw-semibold">Razón Social</label>
        <input type="text" id="razonSocial" name="razonSocial" class="form-control"
               value="<?= htmlspecialchars((string)($registro['razonSocial'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="nombreProveedor" class="form-label fw-semibold">Nombre Proveedor</label>
        <input type="text" id="nombreProveedor" name="nombreProveedor" class="form-control"
               value="<?= htmlspecialchars((string)($registro['nombreProveedor'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="direccion" class="form-label fw-semibold">Dirección</label>
        <input type="text" id="direccion" name="direccion" class="form-control"
               value="<?= htmlspecialchars((string)($registro['direccion'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="Telefono" class="form-label fw-semibold">Teléfono</label>
        <input type="text" id="Telefono" name="Telefono" class="form-control"
               value="<?= htmlspecialchars((string)($registro['Telefono'] ?? $registro['telefono'] ?? '')) ?>" required>
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check2-square me-1"></i> Actualizar Guía Turístico
      </button>
      <a href="/agencia-turismo/public/proveedores" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>