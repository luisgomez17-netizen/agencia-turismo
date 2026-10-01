<h1>Listado Cliente</h1>
<table border="1">
    <tr>
        <th>idCliente</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>idTipoDoc</th>
        <th>numero Documento</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>idCiudad</th>

    </tr>
    <?php if (!empty($cliente)): ?>
        <?php foreach ($cliente as $cat): ?>
            <tr>
                <td><?= $cat['idCliente'] ?></td>
                <td><?= $cat['nombre'] ?></td>
                <td><?= $cat['apellido'] ?></td>
                <td><?= $cat['idTipoDoc'] ?></td>
                <td><?= $cat['numDoc'] ?></td>
                <td><?= $cat['correo'] ?></td>
                <td><?= $cat['telefono'] ?></td>
                <td><?= $cat['direccion'] ?></td>
                <td><?= $cat['idCiudad'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>



<a href="/cliente/crear" class="btn">
     Crear Nuevo Cliente
</a>