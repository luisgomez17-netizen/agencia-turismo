<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Venta</title>
</head>
<body>

<h1>Registrar Venta</h1>

<form action="/venta/guardar" method="POST">

    <label>ID Cliente:</label>
    <input type="number" name="idCliente" required>

    <br><br>

    <label>ID Reserva:</label>
    <input type="number" name="idReserva" required>

    <br><br>

    <label>IVA:</label>
    <input type="number" step="0.01" name="iva" required>

    <br><br>

    <label>Valor Total:</label>
    <input type="number" step="0.01" name="valorTotal" required>

    <br><br>

    <button type="submit">Guardar Venta</button>
    <a href="/venta">Cancelar</a>

</form>

</body>
</html>