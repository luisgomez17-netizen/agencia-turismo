<body>
    <form action="/agencia-turismo/public/clientes/crear" method="POST">
        <!-- Mantén aquí los campos superiores de tu formulario (nombre, apellido, tipo doc, num doc, etc.) -->

        <label>Correo Electrónico:</label><br>
        <input type="email" name="Correo" required>
        <br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="Telefono" required>
        <br><br>

        <label>Dirección:</label><br>
        <input type="text" name="Direccion" required>
        <br><br>

        <label>ID Ciudad:</label><br>
        <input type="number" name="idCiudad" required>
        <br><br>

        <button type="submit">Guardar Cliente</button>
        <a href="/agencia-turismo/public/clientes">Cancelar</a>
    </form>
</body>
</html>