<?php

require_once __DIR__ . "/../models/TipoDoc.php";

class TipoDocController {
    public function index(){
        $tipodocObj = new tipodoc ();

        $tipodoc = $tipodocObj->getAll();
        
        require_once __DIR__ . "/../view/TipoDoc/index.php";
    }
}