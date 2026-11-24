<table border="1">
    <h1>Tabla Paquete</h1>
    <?php if (!empty($paquetes)): ?>
        <?php foreach ($paquetes as $cat): ?>
            <tr>
                <td><?= $cat['Nombre']; ?></td>
                <td><?= $cat['Descripcion']; ?></td>
                <td><?= $cat['Precio']; ?></td>
                <td><?= $cat['Duracion']; ?></td>
                <td><?= $cat['cuposDisponibles']; ?></td>
                <td>
                    <!-- Botón o enlace de Editar -->
                    <a href="/agencia-turismo/public/paquete/editar?id=<?= $cat['idPaquete']; ?>">Editar</a>

                    <!-- Botón o enlace de Eliminar con confirmación -->
                    <a href="/agencia-turismo/public/paquete/eliminar?id=<?= $cat['idPaquete']; ?>"
                       onclick="return confirm('¿Estás seguro de eliminar este paquete?')"
                       style="color: red;">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

<a href="/agencia-turismo/public/paquete/crear">Crear Nuevo Paquete</a>