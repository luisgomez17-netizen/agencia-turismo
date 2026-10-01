<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Departamento</title>
</head>
<body>

<h1>Crear Departamento</h1>

<form action="/departamento/guardar" method="POST">

    <label>Nombre del Departamento:</label>
    <input type="text" name="nombreDepartamento" required>

    <br><br>

    <button type="submit">Guardar Departamento</button>
    <a href="/departamento">Cancelar</a>

</form>

</body>
</html>