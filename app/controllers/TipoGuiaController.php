<?php

require_once __DIR__ . "/../models/TipoGuia.php";

class TipoGuiaController {
    public function index(){
        $tipoguiaObj = new tipoguia ();

        $tipoguia = $tipoguiaObj->getAll();
        
        require_once __DIR__ . "/../view/TipoGuia/index.php";
    }
}