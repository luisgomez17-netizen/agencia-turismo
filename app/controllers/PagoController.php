<?php

require_once __DIR__ . "/../models/Pago.php";

class PagoController {
    public function index(){
        $pagoObj = new Pago(); 

        $pago = $pagoObj->getAll();

        require_once __DIR__ . "/../view/Pago/index.php";
    }
}