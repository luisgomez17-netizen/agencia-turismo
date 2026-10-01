<h1>Listado Pago</h1>
<table border="1">
    <tr>
        <th>idPago</th>
        <th>idVenta</th>
        <th>fecha Pago</th>
        <th>Monto</th>
        <th>idTipopago</th>

    </tr>
    <?php if (!empty($pago)): ?>
        <?php foreach ($pago as $cat): ?>
            <tr>
                <td><?= $cat['idPago'] ?></td>
                <td><?= $cat['idVenta'] ?></td>
                <td><?= $cat['fechaPago'] ?></td>
                <td><?= $cat['Monto'] ?></td>
                <td><?= $cat['idTipoPago'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>