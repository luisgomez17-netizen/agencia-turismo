<h1>Listado Tipo Sangre</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>rh</th>

    </tr>
    <?php if (!empty($tiposangre)): ?>
        <?php foreach ($tiposangre as $cat): ?>
            <tr>
                <td><?= $cat['idTipoSangre'] ?></td>
                <td><?= $cat['rh'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</table>