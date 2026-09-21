<h1>Listado Empresa</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre Empresa</th>
        <th>Tipo Empresa</th>
    </tr>
    <?php if (!empty($empresa)): ?>
        <?php foreach ($empresa as $cat): ?>
            <tr>
                <td><?= $cat['idEmpresa'] ?></td>
                <td><?= $cat['nombreEmpresa'] ?></td>
                <td><?= $cat['tipoEmpresa'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</table>