<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Paquete</title>
</head>
<body>
    <h2>Editar Paquete</h2>

    <form action="/agencia-turismo/public/paquete/actualizar" method="POST">
        <input type="hidden" name="idPaquete" value="<?= htmlspecialchars($paquete['idPaquete'] ?? '') ?>">

        <label>Nombre:</label><br>
        <input type="text" name="Nombre" value="<?= htmlspecialchars($paquete['Nombre'] ?? '') ?>" required>
        <br><br>

        <label>Descripción:</label><br>
        <input type="text" name="Descripcion" value="<?= htmlspecialchars($paquete['Descripcion'] ?? '') ?>" required>
        <br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="Precio" value="<?= htmlspecialchars($paquete['Precio'] ?? '') ?>" required>
        <br><br>

        <label>Duración (días):</label><br>
        <input type="number" name="Duracion" value="<?= htmlspecialchars($paquete['Duracion'] ?? '') ?>" required>
        <br><br>

        <label>Cupos Disponibles:</label><br>
        <input type="number" name="cuposDisponibles" value="<?= htmlspecialchars($paquete['cuposDisponibles'] ?? '') ?>" required>
        <br><br>

        <label>ID Guía:</label><br>
        <input type="number" name="idGuia" value="<?= htmlspecialchars($paquete['idGuia'] ?? '') ?>">
        <br><br>

        <label>ID Hotel:</label><br>
        <input type="number" name="paquete_hotel" value="<?= htmlspecialchars($paquete['paquete_hotel'] ?? '') ?>">
        <br><br>

        <label>ID Transporte:</label><br>
        <input type="number" name="paquete_transporte" value="<?= htmlspecialchars($paquete['paquete_transporte'] ?? '') ?>">
        <br><br>

        <button type="submit">Actualizar Paquete</button>
        <a href="/agencia-turismo/public/paquete">Cancelar</a>
    </form>
</body>
</html>


