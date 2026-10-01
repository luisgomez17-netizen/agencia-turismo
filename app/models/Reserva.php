<?php

require_once __DIR__ . "/../../config/database.php";

class Reserva {
    private $connection;

    public function __construct(){
        $db = new database();
        $this->connection = $db->connect();

    }

    public function getAll() {
        try{
            $sql = "SELECT * FROM reserva";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en reserva::getAll - " . $e->getMessage());
            return [];
            
        }
    }
}