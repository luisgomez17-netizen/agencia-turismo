<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Paquete</title>
</head>
<body>
    <h2>Confirmar Eliminación</h2>

    <p>
        ¿Seguro que deseas eliminar el paquete
        <strong><?= htmlspecialchars($paquete['Nombre'] ?? ('#' . ($_GET['id'] ?? ''))) ?></strong>?
    </p>

    <form action="/agencia-turismo/public/paquete/eliminar" method="POST">
        <input type="hidden" name="idPaquete" value="<?= htmlspecialchars($paquete['idPaquete'] ?? ($_GET['id'] ?? '')) ?>">
        <button type="submit">Sí, Eliminar</button>
        <a href="/agencia-turismo/public/paquete">Cancelar</a>
    </form>
</body>
</html>