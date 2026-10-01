<h1>Listado TipoPago</h1>
<table border="1">
    <tr>
        <th>idTipoPago</th>
        <th>Nombre</th>
    </tr>
    <?php if (!empty($tipoPago)): ?>
        <?php foreach ($tipoPago as $row): ?>
            <tr>
                <td><?= $row['idTipoPago'] ?></td>
                <td><?= $row['Nombre'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>