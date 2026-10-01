<h1>Listado Tipo Transporte</h1>
<table border="1">
    <tr>
        <th>idTipoTransporte</th>
        <th>nombreTipoTransporte</th>

    </tr>
    <?php if (!empty($tipotransporte)): ?>
        <?php foreach ($tipotransporte as $cat): ?>
            <tr>
                <td><?= $cat['idTipoTransporte'] ?></td>
                <td><?= $cat['nombreTipoTransporte'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>