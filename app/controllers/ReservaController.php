<?php

require_once __DIR__ . '/../models/Reserva.php';

class ReservaController
{
    public function index()
    {
        $reservaObj = new Reserva();
        $reservas = $reservaObj->getAll();
        $reserva = $reservas;

        require_once __DIR__ . '/../view/Reserva/index.php';
    }

    public function crear()
    {
        require_once __DIR__ . '/../view/Reserva/crear.php';
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idCliente = !empty($_POST['idCliente']) ? (int) $_POST['idCliente'] : null;
            $idPaquete = !empty($_POST['idPaquete']) ? (int) $_POST['idPaquete'] : null;
            $fecha = trim($_POST['Fecha'] ?? $_POST['fecha'] ?? '');
            $cantidadPersonas = !empty($_POST['CantidadPersonas']) ? (int) $_POST['CantidadPersonas'] : 1;
            $estado = trim($_POST['Estado'] ?? $_POST['estado'] ?? 'Confirmada');

            $reservaObj = new Reserva();
            $guardado = $reservaObj->crear($idCliente, $idPaquete, $fecha, $cantidadPersonas, $estado);

            if ($guardado) {
                header("Location: /agencia-turismo/public/reservas");
                exit();
            } else {
                echo "Error al guardar la reserva.";
            }
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $reservaObj = new Reserva();
            $registro = $reservaObj->obtenerPorId($id);

            require_once __DIR__ . '/../view/Reserva/editar.php';
        } else {
            echo "ID no válido para editar.";
        }
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = filter_input(INPUT_POST, 'idReserva', FILTER_VALIDATE_INT)
                ?: filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            $idCliente = !empty($_POST['idCliente']) ? (int) $_POST['idCliente'] : null;
            $idPaquete = !empty($_POST['idPaquete']) ? (int) $_POST['idPaquete'] : null;
            $fecha = trim($_POST['Fecha'] ?? $_POST['fecha'] ?? '');
            $cantidadPersonas = !empty($_POST['CantidadPersonas']) ? (int) $_POST['CantidadPersonas'] : 1;
            $estado = trim($_POST['Estado'] ?? $_POST['estado'] ?? 'Confirmada');

            if ($id) {
                $reservaObj = new Reserva();
                $resultado = $reservaObj->actualizar($id, $idCliente, $idPaquete, $fecha, $cantidadPersonas, $estado);

                if ($resultado) {
                    header("Location: /agencia-turismo/public/reservas");
                    exit();
                } else {
                    echo "Error al actualizar la reserva.";
                }
            } else {
                echo "ID no válido para actualizar.";
            }
        }
    }

    public function eliminar()
    {
        $idRaw = $_GET['id'] ?? $_POST['id'] ?? $_POST['idReserva'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);

        if ($id) {
            $reservaObj = new Reserva();
            $resultado = $reservaObj->eliminar($id);

            if ($resultado) {
                header("Location: /agencia-turismo/public/reservas");
                exit();
            } else {
                echo "Error al eliminar la reserva.";
            }
        } else {
            echo "ID no válido para eliminar.";
        }
    }
}