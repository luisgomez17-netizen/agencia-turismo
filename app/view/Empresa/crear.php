<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Empresa</title>
</head>
<body>

<h1>Crear Empresa</h1>

<form action="/empresa/guardar" method="POST">

    <label>Tipo de Empresa:</label>
    <input type="text" name="tipoEmpresa" required>

    <br><br>

    <label>Nombre de la Empresa:</label>
    <input type="text" name="nombreEmpresa" required>

    <br><br>

    <button type="submit">Guardar Empresa</button>
    <a href="/empresa">Cancelar</a>

</form>

</body>
</html>