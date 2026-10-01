<?php

require_once __DIR__ . "/../models/Cliente.php";

class ClienteController {
    public function index(){
        $clienteObj = new Cliente ();

        $cliente = $clienteObj->getAll();
        
        require_once __DIR__ . "/../view/Cliente/index.php";
    }

    public function crear() {
        require_once __DIR__ . '/../view/Cliente/crear.php';
    }
}