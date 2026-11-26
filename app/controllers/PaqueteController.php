<?php

require_once __DIR__ . '/../models/Paquete.php';

class PaqueteController
{
    public function index()
    {
        $paqueteModel = new Paquete();
        $paquetes = $paqueteModel->getAll();
        require_once __DIR__ . '/../view/Paquete/index.php';
    }

    public function crear()
    {
        require_once __DIR__ . '/../view/Paquete/crear.php';
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['Nombre'] ?? $_POST['nombre'] ?? '');
            $descripcion = trim($_POST['Descripcion'] ?? $_POST['descripcion'] ?? '');
            $precioRaw = $_POST['Precio'] ?? $_POST['precio'] ?? 0;
            $precio = (float) str_replace(['.', ','], ['', '.'], (string) $precioRaw);
            $duracion = (int) ($_POST['Duracion'] ?? $_POST['duracion'] ?? 0);
            $cuposDisponibles = (int) ($_POST['CuposDisponibles'] ?? $_POST['cuposDisponibles'] ?? 0);
            $idGuia = !empty($_POST['idGuia']) ? (int) $_POST['idGuia'] : null;
            $paquete_hotel = !empty($_POST['paquete_hotel']) ? (int) $_POST['paquete_hotel'] : null;
            $paquete_transporte = !empty($_POST['paquete_transporte']) ? (int) $_POST['paquete_transporte'] : null;

            $paqueteModel = new Paquete();
            $guardado = $paqueteModel->crear(
                $nombre,
                $descripcion,
                $precio,
                $duracion,
                $cuposDisponibles,
                $idGuia,
                $paquete_hotel,
                $paquete_transporte
            );

            if ($guardado) {
                header("Location: /agencia-turismo/public/paquete");
                exit();
            } else {
                echo "Error al guardar el registro.";
            }
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $paqueteModel = new Paquete();
            $paquete = $paqueteModel->obtenerPorId($id);

            require_once __DIR__ . '/../view/Paquete/editar.php';
        } else {
            echo "ID no válido para editar.";
        }
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = filter_input(INPUT_POST, 'idPaquete', FILTER_VALIDATE_INT);
            $nombre = trim($_POST['Nombre'] ?? '');
            $descripcion = trim($_POST['Descripcion'] ?? '');
            $precioRaw = $_POST['Precio'] ?? 0;
            $precio = (float) str_replace(['.', ','], ['', '.'], (string) $precioRaw);
            $duracion = (int) ($_POST['Duracion'] ?? 0);
            $cupos = (int) ($_POST['cuposDisponibles'] ?? $_POST['CuposDisponibles'] ?? 0);

            if ($id) {
                $paqueteModel = new Paquete();
                $resultado = $paqueteModel->actualizar($id, $nombre, $descripcion, $precio, $duracion, $cupos);

                if ($resultado) {
                    header("Location: /agencia-turismo/public/paquete");
                    exit();
                } else {
                    echo "Error al actualizar el registro.";
                }
            } else {
                echo "ID no válido para actualizar.";
            }
        }
    }

    public function eliminar()
    {
        $idRaw = $_GET['id'] ?? $_POST['id'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);

        if ($id) {
            $paqueteModel = new Paquete();
            $resultado = $paqueteModel->eliminar($id);

            if ($resultado) {
                header("Location: /agencia-turismo/public/paquete");
                exit();
            } else {
                echo "El modelo retornó false (la consulta SQL falló).";
            }
        } else {
            echo "El ID llegó vacío o no es un número válido.";
        }
    }

    public function listarJSON()
    {
        header('Content-Type: application/json; charset=utf-8');

        $paqueteModel = new Paquete();
        $paquetes = $paqueteModel->getAll();

        echo json_encode($paquetes, JSON_UNESCAPED_UNICODE);
        exit();
    }
}