<h1>Listado Venta</h1>
<table border="1">
    <tr>
        <th>idVenta</th>
        <th>idCliente</th>
        <th>idReserva</th>
        <th>IVA</th>
        <th>valorTotal</th>

    </tr>
    <?php if (!empty($venta)): ?>
        <?php foreach ($venta as $cat): ?>
            <tr>
                <td><?= $cat['idVenta'] ?></td>
                <td><?= $cat['idCliente'] ?></td>
                <td><?= $cat['idReserva'] ?></td>
                <td><?= $cat['iva'] ?></td>
                <td><?= $cat['valorTotal'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>