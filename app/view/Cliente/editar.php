<?php
$idValor = $registro['idCliente'] ?? $registro['id'] ?? '';
?>

<div class="app-card p-4">
  <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
    <h2 class="h4 fw-bold mb-0">Editar Cliente</h2>
    <a href="/agencia-turismo/public/clientes" class="btn btn-secondary btn-sm">
      <i class="bi bi-arrow-left me-1"></i> Cancelar
    </a>
  </div>

  <form action="/agencia-turismo/public/clientes/actualizar" method="POST">
    <input type="hidden" name="idCliente" value="<?= htmlspecialchars((string)$idValor) ?>">

    <div class="row g-3">
      <div class="col-md-6">
        <label for="Nombre" class="form-label fw-semibold">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" class="form-control"
               value="<?= htmlspecialchars((string)($registro['Nombre'] ?? $registro['nombre'] ?? '')) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="Apellido" class="form-label fw-semibold">Apellido</label>
        <input type="text" id="Apellido" name="Apellido" class="form-control"
               value="<?= htmlspecialchars((string)($registro['Apellido'] ?? $registro['apellido'] ?? '')) ?>">
      </div>

      <div class="col-md-6">
        <label for="Correo" class="form-label fw-semibold">Correo</label>
        <input type="email" id="Correo" name="Correo" class="form-control"
               value="<?= htmlspecialchars((string)($registro['Correo'] ?? $registro['correo'] ?? '')) ?>">
      </div>

      <div class="col-md-6">
        <label for="Telefono" class="form-label fw-semibold">Teléfono</label>
        <input type="text" id="Telefono" name="Telefono" class="form-control"
               value="<?= htmlspecialchars((string)($registro['Telefono'] ?? $registro['telefono'] ?? '')) ?>">
      </div>
    </div>

    <div class="d-flex gap-2 mt-4 pt-2">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-check2-square me-1"></i> Actualizar Cliente
      </button>
      <a href="/agencia-turismo/public/clientes" class="btn btn-outline-secondary">
        Cancelar
      </a>
    </div>
  </form>
</div>