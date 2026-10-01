<h1>Listado Sexo</h1>
<table border="1">
    <tr>
        <th>idSexo</th>
        <th>nSexo</th>

    </tr>
    <?php if (!empty($sexo)): ?>
        <?php foreach ($sexo as $cat): ?>
            <tr>
                <td><?= $cat['idSexo'] ?></td>
                <td><?= $cat['nSexo'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>