<?php

require_once __DIR__ . "/../models/TipoTransporte.php";

class TipoTransporteController {
    public function index(){
        $tipotransporteObj = new tipotransporte ();

        $tipotransporte = $tipotransporteObj->getAll();
        
        require_once __DIR__ . "/../view/TipoTransporte/index.php";
    }
}