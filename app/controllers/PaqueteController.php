<?php

require_once __DIR__ . "/../models/Paquete.php";

class PaqueteController {
    public function index(){
        $paqueteObj = new paquete ();

        $paquete = $paqueteObj->getAll();
        
        require_once __DIR__ . "/../view/Paquete/index.php";
    }
}