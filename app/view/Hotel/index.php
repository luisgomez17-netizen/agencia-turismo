<h1>Listado Hotel</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre </th>
        <th>Ubicacion</th>
        <th>Precio</th>
    </tr>
    <?php if (!empty($hotel)): ?>
        <?php foreach ($hotel as $cat): ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= $cat['nombre'] ?></td>
            <td><?= $cat['descripcion'] ?></td>
            <td><?= $cat['precio'] ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
