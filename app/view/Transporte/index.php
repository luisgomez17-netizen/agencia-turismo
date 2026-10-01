<h1>Listado Transporte</h1>
<table border="1">
    <tr>
        <th>idTransporte</th>
        <th>idTipoTransporte</th>
        <th>Precio</th>
        <th>idEmpresa</th>

    </tr>
    <?php if (!empty($transporte)): ?>
        <?php foreach ($transporte as $cat): ?>
            <tr>
                <td><?= $cat['idTransporte'] ?></td>
                <td><?= $cat['idTipoTransporte'] ?></td>
                <td><?= $cat['Precio'] ?></td>
                <td><?= $cat['idEmpresa'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>