<?php

require_once __DIR__ . "/../models/Hotel.php";

class HotelController {
    public function index(){
        $hotelObj = new hotel ();

        $hotel = $hotelObj->getAll();
        
        require_once __DIR__ . "/../view/Hotel/index.php";
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $estrellas = $_POST['estrellas'];

            $hotelObj = new Hotel();
            $resultado = $hotelObj->crear($nombre, $direccion, $telefono, $email, $estrellas);

            if ($resultado) {
                header("Location: /Hotel/index");
                exit();
            } else {
                echo "Error al crear el hotel.";
            }
        } else {
            require_once __DIR__ . "/../view/Hotel/crear.php";
        }
    }
}