<h1>Editar Paquete</h1>

<form action="/paquete/actualizar" method="POST">
    <!-- Campo oculto para enviar el ID -->
    <input type="hidden" name="idPaquete" value="<?= $paquete['idPaquete'] ?? '' ?>">

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="Nombre" value="<?= $paquete['Nombre'] ?? '' ?>" required><br><br>

    <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="Descripcion" rows="4" cols="50" required><?= $paquete['Descripcion'] ?? '' ?></textarea><br><br>

    <label for="precio">Precio:</label><br>
    <input type="number" id="precio" name="Precio" step="0.01" value="<?= $paquete['Precio'] ?? '' ?>" required><br><br>

    <label for="duracion">Duración:</label><br>
    <input type="text" id="duracion" name="Duracion" value="<?= $paquete['Duracion'] ?? '' ?>" required><br><br>

    <label for="cuposDisponibles">Cupos Disponibles:</label><br>
    <input type="number" id="cuposDisponibles" name="cuposDisponibles" value="<?= $paquete['cuposDisponibles'] ?? '' ?>" required><br><br>

    <label for="idGuia">ID Guía:</label><br>
    <input type="number" id="idGuia" name="idGuia" value="<?= $paquete['idGuia'] ?? '' ?>" required><br><br>

    <label for="paqueteHotel">Paquete Hotel:</label><br>
    <input type="text" id="paqueteHotel" name="paqueteHotel" value="<?= $paquete['paqueteHotel'] ?? '' ?>" required><br><br>

    <label for="paqueteTransporte">Paquete Transporte:</label><br>
    <input type="text" id="paqueteTransporte" name="paquete_transporte" value="<?= $paquete['paquete_transporte'] ?? '' ?>" required><br><br>    <button type="submit">Actualizar Paquete</button>
    <a href="/paquete">Cancelar</a>
</form>


