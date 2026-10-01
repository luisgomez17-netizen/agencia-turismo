<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tipo de Documento</title>
</head>
<body>

<h1>Crear Tipo de Documento</h1>

<form action="/tipo-doc/guardar" method="POST">

    <label>Tipo de Documento:</label>
    <input type="text" name="tipoDocumento" required>

    <br><br>

    <button type="submit">Guardar</button>
    <a href="/tipo-doc">Cancelar</a>

</form>

</body>
</html>