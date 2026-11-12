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
        // Debes tener un método en tu modelo que busque por ID (ej. obtenerPorId)
        $paquete = $paqueteModel->obtenerPorId($id);

        // Aquí cargas tu vista de edición existente
        require_once __DIR__ . '/../view/Paquete/editar.php';
    } else {
        echo "ID no válido para editar.";
    }
}

   public function actualizar()
{
    // Recibe los datos enviados por POST desde el formulario de edición
    $id = filter_input(INPUT_POST, 'idPaquete', FILTER_VALIDATE_INT);
    $nombre = $_POST['Nombre'] ?? '';
    $descripcion = $_POST['Descripcion'] ?? '';
    $precio = $_POST['Precio'] ?? 0;
    $duracion = $_POST['Duracion'] ?? 0;
    $cupos = $_POST['cuposDisponibles'] ?? 0;

    if ($id) {
        $paqueteModel = new Paquete();
        // Método en tu modelo que ejecute el UPDATE en la BD
        $resultado = $paqueteModel->actualizar($id, $nombre, $descripcion, $precio, $duracion, $cupos);

        if ($resultado) {
            header("Location: /paquete");
            exit();
        } else {
            echo "Error al actualizar el registro.";
        }
    }
}

   public function eliminar()
{
    // Capturamos el ID por GET
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    // PRUEBA DE DEPURACIÓN: Descomenta la siguiente línea para ver si llega el ID
    // var_dump($id); die();

    if ($id) {
        $paqueteModel = new Paquete();
        $resultado = $paqueteModel->eliminar($id);

        if ($resultado) {
            header("Location: /paquete"); // Ajusta la ruta si es necesario
            exit();
        } else {
            echo "El modelo retornó false (la consulta SQL falló).";
        }
    } else {
        echo "El ID llegó vacío o no es un número válido.";
    }
}
}