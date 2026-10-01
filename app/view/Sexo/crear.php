<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Sexo</title>
</head>
<body>

<h1>Crear Sexo</h1>

<form action="/sexo/guardar" method="POST">

    <label>Descripción / Nombre:</label>
    <input type="text" name="nSexo" required>

    <br><br>

    <button type="submit">Guardar</button>
    <a href="/sexo">Cancelar</a>

</form>

</body>
</html>