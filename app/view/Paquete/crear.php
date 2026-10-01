<!-- app/view/Paquete/crear.php -->

<form action="/paquete/guardar" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="Nombre" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="Descripcion" required></textarea><br><br>

    <label>Precio:</label><br>
    <input type="number" step="0.01" name="Precio" required><br><br>

    <label>Duración (días):</label><br>
    <input type="number" name="Duracion" required><br><br>

    <!-- Asegúrate de tener este input con name="CuposDisponibles" -->
    <label>Cupos Disponibles:</label><br>
    <input type="number" name="CuposDisponibles" required><br><br>

    <label>ID Guía:</label><br>
    <input type="number" name="idGuia" required><br><br>

    <label>Paquete Hotel:</label><br>
    <input type="number" name="paquete_hotel" required><br><br>

    <label>Paquete Transporte:</label><br>
    <input type="number" name="paquete_transporte" required><br><br>

    <button type="submit">Guardar Paquete</button>
    <a href="/paquete">Cancelar</a>
</form>