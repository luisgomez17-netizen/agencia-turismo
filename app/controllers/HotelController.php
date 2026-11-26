<?php

require_once __DIR__ . '/../models/Hotel.php';

class HotelController
{
    public function index()
    {
        $hotelObj = new Hotel();
        $hoteles = $hotelObj->getAll();
        $hotel = $hoteles;

        require_once __DIR__ . '/../view/Hotel/index.php';
    }

    public function crear()
    {
        require_once __DIR__ . '/../view/Hotel/crear.php';
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $ubicacion = trim($_POST['ubicacion'] ?? '');
            $precio = $_POST['precio'] ?? 0;

            $hotelObj = new Hotel();
            $guardado = $hotelObj->crear($nombre, $ubicacion, $precio);

            if ($guardado) {
                header("Location: /agencia-turismo/public/hoteles");
                exit();
            } else {
                echo "Error al guardar el hotel.";
            }
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $hotelObj = new Hotel();
            $registro = $hotelObj->obtenerPorId($id);

            require_once __DIR__ . '/../view/Hotel/editar.php';
        } else {
            echo "ID no válido para editar.";
        }
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = filter_input(INPUT_POST, 'idHotel', FILTER_VALIDATE_INT)
                ?: filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            $nombre = trim($_POST['nombre'] ?? '');
            $ubicacion = trim($_POST['ubicacion'] ?? '');
            $precio = $_POST['precio'] ?? 0;

            if ($id) {
                $hotelObj = new Hotel();
                $resultado = $hotelObj->actualizar($id, $nombre, $ubicacion, $precio);

                if ($resultado) {
                    header("Location: /agencia-turismo/public/hoteles");
                    exit();
                } else {
                    echo "Error al actualizar el hotel.";
                }
            } else {
                echo "ID no válido para actualizar.";
            }
        }
    }

    public function eliminar()
    {
        $idRaw = $_GET['id'] ?? $_POST['id'] ?? $_POST['idHotel'] ?? null;
        $id = filter_var($idRaw, FILTER_VALIDATE_INT);

        if ($id) {
            $hotelObj = new Hotel();
            $resultado = $hotelObj->eliminar($id);

            if ($resultado) {
                header("Location: /agencia-turismo/public/hoteles");
                exit();
            } else {
                echo "Error al eliminar el hotel.";
            }
        } else {
            echo "ID no válido para eliminar.";
        }
    }
}