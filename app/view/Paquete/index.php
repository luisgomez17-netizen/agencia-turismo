<h1>Listado Paquete</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Duración</th>
        <th>Cupos Disponibles</th>
        <th>Acciones</th>
    </tr>
    <?php if (!empty($paquetes)): ?>
        <?php foreach ($paquetes as $cat): ?>
            <tr>
                <td><?= $cat['idPaquete'] ?></td>
                <td><?= $cat['Nombre'] ?></td>
                <td><?= $cat['Descripcion'] ?></td>
                <td><?= $cat['Precio'] ?></td>
                <td><?= $cat['Duracion'] ?></td>
                <td><?= $cat['cuposDisponibles'] ?></td>
                <td>
                    <a href="/paquete/editar?id=<?= $cat['idPaquete']; ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>




<a href="/paquete/crear" class="btn">
     Crear Nuevo Paquete
</a>

