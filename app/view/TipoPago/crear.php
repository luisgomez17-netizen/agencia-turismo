<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tipo de Pago</title>
</head>
<body>

<h1>Crear Tipo de Pago</h1>

<form action="/tipo-pago/guardar" method="POST">

    <label>Nombre del Tipo de Pago:</label>
    <input type="text" name="Nombre" required>

    <br><br>

    <button type="submit">Guardar</button>
    <a href="/tipo-pago">Cancelar</a>

</form>

</body>
</html>