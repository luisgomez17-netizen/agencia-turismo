<?php

require_once __DIR__ . '/../models/Ciudad.php';

class CiudadController {

    public function index() {
        $ciudadModel = new Ciudad();
        $ciudades = $ciudadModel->getAll();
        require_once __DIR__ . '/../view/Ciudad/index.php';
    }

    public function crear() {
        require_once __DIR__ . '/../view/Ciudad/crear.php';
    }

    public function guardar() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombreCiudad = $_POST['nombreCiudad'] ?? '';
        $idDepartamento = !empty($_POST['idDepartamento']) ? (int)$_POST['idDepartamento'] : null;

        $ciudadModel = new Ciudad();
        $guardado = $ciudadModel->crear($nombreCiudad, $idDepartamento);

        if ($guardado) {
            header('Location: /ciudad');
            exit();
            }
        }
    } 
}
    
