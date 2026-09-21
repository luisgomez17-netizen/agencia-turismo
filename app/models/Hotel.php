<?php

require_once __DIR__ . "/../../config/database.php";

class Hotel {
    private $connection;

    public function __construct(){
        $db = new database();
        $this->connection = $db->connect();

    }

    public function getAll() {
        try{
            $sql = "SELECT * FROM hotel";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en hotel::getAll - " . $e->getMessage());
            return [];
            
        }
    }
}