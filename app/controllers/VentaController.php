<?php

require_once __DIR__ . "/../models/Venta.php";

class VentaController {
    public function index(){
        $ventaObj = new venta ();

        $venta = $ventaObj->getAll();
        
        require_once __DIR__ . "/../view/Venta/index.php";
    }
}