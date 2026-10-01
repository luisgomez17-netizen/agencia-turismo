<?php

require_once __DIR__ . "/../../config/database.php";

class TipoPago {
    private $connection;

    public function __construct() {
        $dbObj = new Database();
        $this->connection = $dbObj->connect(); // <-- Se debe llamar al método connect()
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM tipopago";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en TipoPago::getAll - " . $e->getMessage());
            return [];
        }
    }
}