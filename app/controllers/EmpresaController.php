<?php

require_once __DIR__ . "/../models/Empresa.php";

class EmpresaController {
    public function index(){
        $empresaObj = new empresa ();

        $empresa = $empresaObj->getAll();
        
        require_once __DIR__ . "/../view/Empresa/index.php";
    }
}