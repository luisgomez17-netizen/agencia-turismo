<h1>Listado Departamento</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>

    </tr>
    <?php if (!empty($departamento)): ?>
        <?php foreach ($departamento as $cat): ?>
            <tr>
                <td><?= $cat['idDepartamento'] ?></td>
                <td><?= $cat['nombreDepartamento'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</table>