<?php

require_once __DIR__ . '/../models/Venta.php';

class VentaController
{
    public function index()
    {
        $ventaObj = new Venta();
        $ventas = $ventaObj->getAll();
        $venta = $ventas;

        require_once __DIR__ . '/../view/Venta/index.php';
    }

    public function crear()
    {
        require_once __DIR__ . '/../view/Venta/crear.php';
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idCliente = !empty($_POST['idCliente']) ? (int) $_POST['idCliente'] : null;
            $idReserva = !empty($_POST['idReserva']) ? (int) $_POST['idReserva'] : null;
            $iva = $_POST['IVA'] ?? $_POST['iva'] ?? 0;
            $valorTotal = $_POST['valorTotal'] ?? 0;

            $ventaObj = new Venta();
            $guardado = $ventaObj->crear($idCliente, $idReserva, $iva, $valorTotal);

            if ($guardado) {
                header("Location: /agencia-turismo/public/ventas");
                exit();
            } else {
                echo "Error al guardar la venta.";
            }
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $ventaObj = new Venta();
            $registro = $ventaObj->obtenerPorId($id);

            require_once __DIR__ . '/../view/Venta/editar.php';
        } else {
            echo "ID no válido para editar.";
        }
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = filter_input(INPUT_POST, 'idVenta', FILTER_VALIDATE_INT)
                ?: filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            $idCliente = !empty($_POST['idCliente']) ? (int) $_POST['idCliente'] : null;
            $idReserva = !empty($_POST['idReserva']) ? (int) $_POST['idReserva'] : null;
            $iva = $_POST['IVA'] ?? $_POST['iva'] ?? 0;
            $valorTotal = $_POST['valorTotal'] ?? 0;

            if ($id) {
                $ventaObj = new Venta();
                $resultado = $ventaObj->actualizar($id, $idCliente, $idReserva, $iva, $valorTotal);

                if ($resultado) {
                    header("Location: /agencia-turismo/public/ventas");
                    exit();
                } else {
                    echo "Error al actualizar la venta.";
                }
            } else {
                echo "ID no válido para actualizar.";
            }
        }
    }

    public function eliminar()
    {
        $idRaw = $_GET['id'] ?? $_POST['id'] ?? $_POST['idVenta'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);

        if ($id) {
            $ventaObj = new Venta();
            $resultado = $ventaObj->eliminar($id);

            if ($resultado) {
                header("Location: /agencia-turismo/public/ventas");
                exit();
            } else {
                echo "Error al eliminar la venta.";
            }
        } else {
            echo "ID no válido para eliminar.";
        }
    }
}