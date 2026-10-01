<?php

require_once __DIR__ . "/../models/Reserva.php";

class ReservaController {
    public function index(){
        $reservaObj = new reserva ();

        $reserva = $reservaObj->getAll();
        
        require_once __DIR__ . "/../view/Reserva/index.php";
    }
}