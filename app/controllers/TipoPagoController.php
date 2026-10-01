<?php

require_once __DIR__ . '/../models/TipoPago.php';

class TipoPagoController {

    public function index() {
        $model = new TipoPago();
        $tipoPago = $model->getAll(); 
        
        require_once __DIR__ . '/../view/TipoPago/index.php';
    }
}