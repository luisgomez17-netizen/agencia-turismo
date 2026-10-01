<h1>Listado Reserva</h1>
<table border="1">
    <tr>
        <th>idReserva</th>
        <th>idCliente</th>
        <th>idPaquete</th>
        <th>Fecha</th>
        <th>Cantidad Personas</th>
        <th>Estado</th>

    </tr>
    <?php if (!empty($reserva)): ?>
        <?php foreach ($reserva as $cat): ?>
            <tr>
                <td><?= $cat['idReserva'] ?></td>
                <td><?= $cat['idCliente'] ?></td>
                <td><?= $cat['idPaquete'] ?></td>
                <td><?= $cat['Fecha'] ?></td>
                <td><?= $cat['CantidadPersonas'] ?></td>
                <td><?= $cat['Estado'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>