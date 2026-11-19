<form action="/hotel/guardar" method="POST">
    <label>Nombre del Hotel:</label>
    <input type="text" name="nombre" required>
    <br><br>
    <label>Ubicación:</label>
    <input type="text" name="ubicacion" required>
    <br><br>
    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" required>
    <br><br>

    <button type="submit">Guardar Hotel</button>
    <a href="/hotel">Cancelar</a>
    
</form>