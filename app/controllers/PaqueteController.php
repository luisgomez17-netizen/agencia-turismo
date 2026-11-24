<?php
// app/controllers/PaqueteController.php

require_once __DIR__ . '/../models/Paquete.php';

class PaqueteController {

    public function index() {
        $paqueteModel = new Paquete();
        $paquetes = $paqueteModel->getAll();
        require_once __DIR__ . '/../view/Paquete/index.php';
    }

    public function crear() {
        require_once __DIR__ . '/../view/Paquete/crear.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['Nombre'] ?? $_POST['nombre'];
            $descripcion = $_POST['Descripcion'] ?? $_POST['descripcion'];
            $precio = $_POST['Precio'] ?? $_POST['precio'];
            $duracion = $_POST['Duracion'] ?? $_POST['duracion'];
            $cuposDisponibles = $_POST['CuposDisponibles'] ?? $_POST['cuposDisponibles'];
            $idGuia = !empty($_POST['idGuia']) ? (int)$_POST['idGuia'] : null;
            $paquete_hotel = !empty($_POST['paquete_hotel']) ? (int)$_POST['paquete_hotel'] : null;
            $paquete_transporte = !empty($_POST['paquete_transporte']) ? (int)$_POST['paquete_transporte'] : null;

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
                header('Location: /paquete');
                exit();
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
    $id = filter_input(INPUT_POST, 'idPaquete', FILTER_VALIDATE_INT);
    $nombre = $_POST['Nombre'] ?? '';
    $descripcion = $_POST['Descripcion'] ?? '';
    $precio = $_POST['Precio'] ?? 0;
    $duracion = $_POST['Duracion'] ?? 0;
    $cupos = $_POST['cuposDisponibles'] ?? 0;

    if ($id) {
        $paqueteModel = new Paquete();
        $resultado = $paqueteModel->actualizar($id, $nombre, $descripcion, $precio, $duracion, $cupos);

        if ($resultado) {
            header("Location: /agencia-turismo/public/paquete");
            exit();
        } else {
            echo "Error al actualizar el registro.";
        }
    }
}

public function eliminar()
{
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

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
}