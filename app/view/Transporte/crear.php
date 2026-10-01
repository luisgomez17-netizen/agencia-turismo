<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Transporte</title>
</head>
<body>

<h1>Crear Transporte</h1>

<form action="/transporte/guardar" method="POST">

    <label>ID Tipo Transporte:</label>
    <input type="number" name="idTipoTransporte" required>

    <br><br>

    <label>Precio:</label>
    <input type="number" step="0.01" name="Precio" required>

    <br><br>

    <label>ID Empresa:</label>
    <input type="number" name="idEmpresa" required>

    <br><br>

    <button type="submit">Guardar Transporte</button>
    <a href="/transporte">Cancelar</a>

</form>

</body>
</html>