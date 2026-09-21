<?php

require_once __DIR__ . "/../models/Ciudad.php";

class CiudadController {
    public function index(){
        $ciudadObj = new ciudad ();

        $ciudad = $ciudadObj->getAll();
        
        require_once __DIR__ . "/../view/Ciudad/index.php";
    }
}