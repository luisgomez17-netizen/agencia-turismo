<h1>Listado Documento</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tipo Documento</th>

    </tr>
    <?php if (!empty($tipodoc)): ?>
        <?php foreach ($tipodoc as $cat): ?>
            <tr>
                <td><?= $cat['idTipoDocumento'] ?></td>
                <td><?= $cat['tipoDocumento'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</table>