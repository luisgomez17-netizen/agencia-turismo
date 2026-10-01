<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tipo de Sangre</title>
</head>
<body>

<h1>Crear Tipo de Sangre</h1>

<form action="/tipo-sangre/guardar" method="POST">

    <label>Tipo de Sangre / RH:</label>
    <input type="text" name="rh" required>

    <br><br>

    <button type="submit">Guardar</button>
    <a href="/tipo-sangre">Cancelar</a>

</form>

</body>
</html>