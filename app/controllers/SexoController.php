<?php

require_once __DIR__ . "/../models/Sexo.php";

class SexoController {
    public function index(){
        $sexoObj = new sexo ();

        $sexo = $sexoObj->getAll();
        
        require_once __DIR__ . "/../view/Sexo/index.php";
    }
}