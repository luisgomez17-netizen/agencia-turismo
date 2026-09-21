<?php

require_once __DIR__ . "/../models/TipoSangre.php";

class TipoSangreController {
    public function index(){
        $tiposangreObj = new tiposangre ();

        $tiposangre = $tiposangreObj->getAll();
        
        require_once __DIR__ . "/../view/TipoSangre/index.php";
    }
}