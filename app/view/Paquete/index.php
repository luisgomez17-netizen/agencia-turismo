<h1>Listado Paquete</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre </th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Duracion</th>
        <th>Cupos Disponibles</th>
    </tr>
    <?php if (!empty($paquete)): ?>
        <?php foreach ($paquete as $cat): ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= $cat['nombre'] ?></td>
            <td><?= $cat['descripcion'] ?></td>
            <td><?= $cat['precio'] ?></td>
            <td><?= $cat['duracion'] ?></td>
            <td><?= $cat['cuposDisponibles'] ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>