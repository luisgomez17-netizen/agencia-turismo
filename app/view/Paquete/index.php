<h1>Listado Paquete</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Duración</th>
        <th>Cupos Disponibles</th>
    </tr>
    <?php if (!empty($paquete)): ?>
        <?php foreach ($paquete as $cat): ?>
            <tr>
                <td><?= $cat['idPaquete'] ?></td>
                <td><?= $cat['Nombre'] ?></td>
                <td><?= $cat['Descripcion'] ?></td>
                <td><?= $cat['Precio'] ?></td>
                <td><?= $cat['Duracion'] ?></td>
                <td><?= $cat['cuposDisponibles'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>