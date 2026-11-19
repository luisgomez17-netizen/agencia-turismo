<form method="POST" action="/Hotel/editar">
    <input type="hidden" name="id" value="<?= $hotel['Id'] ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?= $hotel['Nombre'] ?>" required>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" value="<?= $hotel['Direccion'] ?>" required>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" id="telefono" value="<?= $hotel['Telefono'] ?>" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $hotel['Email'] ?>" required>
    <label for="estrellas">Estrellas:</label>
    <input type="number" name="estrellas" id="estrellas" value="<?= $hotel['Estrellas'] ?>" required>
    <button type="submit">Actualizar</button>
</form>

