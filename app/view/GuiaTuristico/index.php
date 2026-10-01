<h1>Listado Guia Turistico</h1>
<table border="1">
    <tr>
        <th>idGuia Turistico</th>
        <th>idTipo Guia</th>
        <th>idCiudad</th>
        <th>idDepartamento</th>
        <th>razon Social</th>
        <th>nombre Proveedor</th>
        <th>Direccion</th>
        <th>Telefono</th>
    </tr>
    <?php if (!empty($guiaturi)): ?>
        <?php foreach ($guiaturi as $cat): ?>
            <tr>
                <td><?= $cat['idGuiaTuristico'] ?></td>
                <td><?= $cat['idTipoGuia'] ?></td>
                <td><?= $cat['idCiudad'] ?></td>
                <td><?= $cat['idDepartamento'] ?></td>
                <td><?= $cat['razonSocial'] ?></td>
                <td><?= $cat['nombreProveedor'] ?></td>
                <td><?= $cat['direccion'] ?></td>
                <td><?= $cat['Telefono'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>