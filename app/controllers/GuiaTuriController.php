<?php

require_once __DIR__ . '/../models/GuiaTuristico.php';

class GuiaTuriController
{
    public function index()
    {
        $guiaObj = new GuiaTuristico();
        $guias = $guiaObj->getAll();

        require_once __DIR__ . '/../view/GuiaTuristico/index.php';
    }

    public function crear()
    {
        require_once __DIR__ . '/../view/GuiaTuristico/crear.php';
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idTipoGuia = !empty($_POST['idTipoGuia']) ? (int) $_POST['idTipoGuia'] : null;
            $idCiudad = !empty($_POST['idCiudad']) ? (int) $_POST['idCiudad'] : null;
            $idDepartamento = !empty($_POST['idDepartamento']) ? (int) $_POST['idDepartamento'] : null;
            $razonSocial = trim($_POST['razonSocial'] ?? '');
            $nombreProveedor = trim($_POST['nombreProveedor'] ?? '');
            $direccion = trim($_POST['direccion'] ?? '');
            $Telefono = trim($_POST['Telefono'] ?? $_POST['telefono'] ?? '');

            $guiaObj = new GuiaTuristico();
            $guardado = $guiaObj->crear(
                $idTipoGuia,
                $idCiudad,
                $idDepartamento,
                $razonSocial,
                $nombreProveedor,
                $direccion,
                $Telefono
            );

            if ($guardado) {
                header("Location: /agencia-turismo/public/proveedores");
                exit();
            } else {
                echo "Error al guardar el guía turístico.";
            }
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $guiaObj = new GuiaTuristico();
            $registro = $guiaObj->obtenerPorId($id);

            require_once __DIR__ . '/../view/GuiaTuristico/editar.php';
        } else {
            echo "ID no válido para editar.";
        }
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = filter_input(INPUT_POST, 'idGuiaTuristico', FILTER_VALIDATE_INT)
                ?: filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            $idTipoGuia = !empty($_POST['idTipoGuia']) ? (int) $_POST['idTipoGuia'] : null;
            $idCiudad = !empty($_POST['idCiudad']) ? (int) $_POST['idCiudad'] : null;
            $idDepartamento = !empty($_POST['idDepartamento']) ? (int) $_POST['idDepartamento'] : null;
            $razonSocial = trim($_POST['razonSocial'] ?? '');
            $nombreProveedor = trim($_POST['nombreProveedor'] ?? '');
            $direccion = trim($_POST['direccion'] ?? '');
            $Telefono = trim($_POST['Telefono'] ?? $_POST['telefono'] ?? '');

            if ($id) {
                $guiaObj = new GuiaTuristico();
                $resultado = $guiaObj->actualizar(
                    $id,
                    $idTipoGuia,
                    $idCiudad,
                    $idDepartamento,
                    $razonSocial,
                    $nombreProveedor,
                    $direccion,
                    $Telefono
                );

                if ($resultado) {
                    header("Location: /agencia-turismo/public/proveedores");
                    exit();
                } else {
                    echo "Error al actualizar el guía turístico.";
                }
            } else {
                echo "ID no válido para actualizar.";
            }
        }
    }

    public function eliminar()
    {
        $idRaw = $_GET['id'] ?? $_POST['id'] ?? $_POST['idGuiaTuristico'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);

        if ($id) {
            $guiaObj = new GuiaTuristico();
            $resultado = $guiaObj->eliminar($id);

            if ($resultado) {
                header("Location: /agencia-turismo/public/proveedores");
                exit();
            } else {
                echo "Error al eliminar el guía turístico.";
            }
        } else {
            echo "ID no válido para eliminar.";
        }
    }
}