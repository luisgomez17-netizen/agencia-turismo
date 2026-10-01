<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tipo de Transporte</title>
</head>
<body>

<h1>Crear Tipo de Transporte</h1>

<form action="/tipo-transporte/guardar" method="POST">

    <label>Nombre Tipo de Transporte:</label>
    <input type="text" name="nombreTipoTransporte" required>

    <br><br>

    <button type="submit">Guardar</button>
    <a href="/tipo-transporte">Cancelar</a>

</form>

</body>
</html>