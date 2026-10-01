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
}