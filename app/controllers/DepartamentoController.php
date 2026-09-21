<?php

require_once __DIR__ . "/../models/Departamento.php";

class DepartamentoController {
    public function index(){
        $departamentoObj = new departamento ();

        $departamento = $departamentoObj->getAll();
        
        require_once __DIR__ . "/../view/Departamento/index.php";
    }
}