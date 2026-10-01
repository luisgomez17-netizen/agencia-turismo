<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Pago</title>
</head>
<body>

<h1>Registrar Pago</h1>

<form action="/pago/guardar" method="POST">

    <label>ID Venta:</label>
    <input type="number" name="idVenta" required>

    <br><br>

    <label>Fecha de Pago:</label>
    <input type="date" name="fechaPago" required>

    <br><br>

    <label>Monto:</label>
    <input type="number" step="0.01" name="Monto" required>

    <br><br>

    <label>ID Tipo Pago:</label>
    <input type="number" name="idTipoPago" required>

    <br><br>

    <button type="submit">Guardar Pago</button>
    <a href="/pago">Cancelar</a>

</form>

</body>
</html>