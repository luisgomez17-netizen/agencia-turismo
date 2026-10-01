<?php

require_once __DIR__ . "/../models/Transporte.php";

class TransporteController {
    public function index(){
        $transporteObj = new transporte ();

        $transporte = $transporteObj->getAll();
        
        require_once __DIR__ . "/../view/Transporte/index.php";
    }
}