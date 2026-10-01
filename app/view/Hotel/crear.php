<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Hotel</title>
</head>
<body>

<h1>Crear Hotel</h1>

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

</body>
</html>