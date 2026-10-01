<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Reserva</title>
</head>
<body>

<h1>Crear Reserva</h1>

<form action="/reserva/guardar" method="POST">

    <label>ID Cliente:</label>
    <input type="number" name="idCliente" required>

    <br><br>

    <label>ID Paquete:</label>
    <input type="number" name="idPaquete" required>

    <br><br>

    <label>Fecha:</label>
    <input type="date" name="Fecha" required>

    <br><br>

    <label>Cantidad de Personas:</label>
    <input type="number" name="CantidadPersonas" required>

    <br><br>

    <label>Estado:</label>
    <input type="text" name="Estado" required>

    <br><br>

    <button type="submit">Guardar Reserva</button>
    <a href="/reserva">Cancelar</a>

</form>

</body>
</html>