<form action="/paquete/actualizar" method="POST">
    <!-- Campo oculto indispensable para enviar el ID -->
    <input type="hidden" name="idPaquete" value="<?= $paquete['idPaquete']; ?>">

    <label>Nombre:</label>
    <input type="text" name="Nombre" value="<?= $paquete['Nombre']; ?>" required>

    <label>Descripción:</label>
    <input type="text" name="Descripcion" value="<?= $paquete['Descripcion']; ?>" required>

    <label>Precio:</label>
    <input type="number" step="0.01" name="Precio" value="<?= $paquete['Precio']; ?>" required>

    <label>Duración:</label>
    <input type="number" name="Duracion" value="<?= $paquete['Duracion']; ?>" required>

    <label>Cupos Disponibles:</label>
    <input type="number" name="cuposDisponibles" value="<?= $paquete['cuposDisponibles']; ?>" required>

    <button type="submit">Actualizar Paquete</button>
</form>



