<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Guía Turístico</title>
</head>
<body>

<h1>Crear Guía Turístico</h1>

<form action="/guia-turi/guardar" method="POST">

    <label>ID Tipo Guía:</label>
    <input type="number" name="idTipoGuia" required>

    <br><br>

    <label>ID Ciudad:</label>
    <input type="number" name="idCiudad" required>

    <br><br>

    <label>ID Departamento:</label>
    <input type="number" name="idDepartamento" required>

    <br><br>

    <label>Razón Social:</label>
    <input type="text" name="razonSocial" required>

    <br><br>

    <label>Nombre Proveedor:</label>
    <input type="text" name="nombreProveedor" required>

    <br><br>

    <label>Dirección:</label>
    <input type="text" name="direccion" required>

    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required>

    <br><br>

    <button type="submit">Guardar Guía</button>
    <a href="/guia-turi">Cancelar</a>

</form>

</body>
</html>