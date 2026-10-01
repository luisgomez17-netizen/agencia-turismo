<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
</head>
<body>

    <h1>Crear Cliente</h1>

    <form action="/cliente/guardar" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="Nombre" required>
        <br><br>

        <label>Apellido:</label><br>
        <input type="text" name="Apellido" required>
        <br><br>

        <label>ID Tipo Documento:</label><br>
        <input type="number" name="idTipoDoc" required>
        <br><br>

        <label>Número Documento:</label><br>
        <input type="text" name="numeroDocumento" required>
        <br><br>

        <label>Correo Electrónico:</label><br>
        <input type="email" name="Correo" required>
        <br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="Telefono" required>
        <br><br>

        <label>Dirección:</label><br>
        <input type="text" name="Direccion" required>
        <br><br>

        <label>ID Ciudad:</label><br>
        <input type="number" name="idCiudad" required>
        <br><br>

        <button type="submit">Guardar Cliente</button>
        <a href="/cliente">Cancelar</a>
    </form>

</body>
</html>>