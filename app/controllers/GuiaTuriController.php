<?php

require_once __DIR__ . "/../models/GuiaTuristico.php";

class GuiaTuriController {
    public function index(){
        $guiaturiObj = new GuiaTuristico(); // <-- Se cambió 'guiaturi' por 'GuiaTuristico'

        $guiaturi = $guiaturiObj->getAll();

        require_once __DIR__ . "/../view/GuiaTuristico/index.php";
    }
}