<h2>Listado Ciudad</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ciudades as $ciudad): ?>
            <tr>
                <td><?= $ciudad['idCiudad'] ?></td>
                <td><?= $ciudad['nombreCiudad'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>
<a href="/ciudad/crear" class="btn">
    Crear Nueva Ciudad
</a>