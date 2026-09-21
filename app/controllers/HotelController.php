<?php

require_once __DIR__ . "/../models/Hotel.php";

class HotelController {
    public function index(){
        $hotelObj = new hotel ();

        $hotel = $hotelObj->getAll();
        
        require_once __DIR__ . "/../view/Hotel/index.php";
    }
}