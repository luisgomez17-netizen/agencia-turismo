<h1>Listado Tipo Guia</h1>
<table border="1">
    <tr>
        <th>idTipoGuia</th>
        <th>tipo Guia</th>

    </tr>
    <?php if (!empty($tipoguia)): ?>
        <?php foreach ($tipoguia as $cat): ?>
            <tr>
                <td><?= $cat['idTipoGuia'] ?></td>
                <td><?= $cat['tipoGuia'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>