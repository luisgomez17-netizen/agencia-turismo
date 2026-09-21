<h1>Listado Ciudad</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>

    </tr>
    <?php if (!empty($ciudad)): ?>
        <?php foreach ($ciudad as $cat): ?>
            <tr>
                <td><?= $cat['idCiudad'] ?></td>
                <td><?= $cat['nombreCiudad'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>