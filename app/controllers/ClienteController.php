<?php

require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    public function index()
    {
        $clienteObj = new Cliente();
        $clientes =$clienteObj->getAll();
        $cliente =$clientes;

        require_once __DIR__ . '/../view/Cliente/index.php';
    }

    public function crear()
    {
        require_once __DIR__ . '/../view/Cliente/crear.php';
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {$nombre = trim($_POST['Nombre'] ?? $_POST['nombre'] ?? '');
            $apellido = trim($_POST['Apellido'] ?? $_POST['apellido'] ?? '');$idTipoDoc = !empty($_POST['idTipoDoc']) ? (int)$_POST['idTipoDoc'] : null;
            $numDoc = trim($_POST['numeroDocumento'] ?? $_POST['numDoc'] ?? '');
            $correo = trim($_POST['Correo'] ?? $_POST['correo'] ?? '');$telefono = trim($_POST['Telefono'] ?? $_POST['telefono'] ?? '');
            $direccion = trim($_POST['Direccion'] ?? $_POST['direccion'] ?? '');$idCiudad = !empty($_POST['idCiudad']) ? (int)$_POST['idCiudad'] : null;

            $clienteObj = new Cliente();
            $guardado =$clienteObj->crear(
                $nombre,$apellido,
                $idTipoDoc,$numDoc,
                $correo,$telefono,
                $direccion,$idCiudad
            );

            if ($guardado) {
                header("Location: /agencia-turismo/public/clientes");
                exit();
            } else {
                echo "Error al guardar el cliente.";
            }
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $clienteObj = new Cliente();$registro = $clienteObj->obtenerPorId($id);

            require_once __DIR__ . '/../view/Cliente/editar.php';
        } else {
            echo "ID no válido para editar.";
        }
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {$id = filter_input(INPUT_POST, 'idCliente', FILTER_VALIDATE_INT)
                ?: filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            $nombre = trim($_POST['Nombre'] ?? $_POST['nombre'] ?? '');
            $apellido = trim($_POST['Apellido'] ?? $_POST['apellido'] ?? '');$idTipoDoc = !empty($_POST['idTipoDoc']) ? (int)$_POST['idTipoDoc'] : null;
            $numDoc = trim($_POST['numeroDocumento'] ?? $_POST['numDoc'] ?? '');
            $correo = trim($_POST['Correo'] ?? $_POST['correo'] ?? '');$telefono = trim($_POST['Telefono'] ?? $_POST['telefono'] ?? '');
            $direccion = trim($_POST['Direccion'] ?? $_POST['direccion'] ?? '');$idCiudad = !empty($_POST['idCiudad']) ? (int)$_POST['idCiudad'] : null;

            if ($id) {
                $clienteObj = new Cliente();$resultado = $clienteObj->actualizar($id,
                    $nombre,$apellido,
                    $idTipoDoc,$numDoc,
                    $correo,$telefono,
                    $direccion,$idCiudad
                );

                if ($resultado) {
                    header("Location: /agencia-turismo/public/clientes");
                    exit();
                } else {
                    echo "Error al actualizar el cliente.";
                }
            } else {
                echo "ID no válido para actualizar.";
            }
        }
    }

    public function eliminar()
    {
        $idRaw =$_GET['id'] ?? $_POST['id'] ?? $_POST['idCliente'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);

        if ($id) {
            $clienteObj = new Cliente();$resultado = $clienteObj->eliminar($id);

            if ($resultado) {
                header("Location: /agencia-turismo/public/clientes");
                exit();
            } else {
                echo "Error al eliminar el cliente.";
            }
        } else {
            echo "ID no válido para eliminar.";
        }
    }
}