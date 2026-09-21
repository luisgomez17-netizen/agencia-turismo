<h1>Listado Hotel</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ubicación</th>
        <th>Precio</th>
    </tr>
    <?php if (!empty($hotel)): ?>
        <?php foreach ($hotel as $cat): ?>
            <tr>
                <td><?= $cat['idHotel'] ?></td>
                <td><?= $cat['nombre'] ?></td>
                <td><?= $cat['ubicacion'] ?></td>
                <td><?= $cat['precio'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>