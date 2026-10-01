<?php

require_once __DIR__ . "/../../config/database.php";

class Departamento {
    private $connection;

    public function __construct(){
        $db = new Database(); // <-- 'Database' con 'D' mayúscula
        $this->connection = $db->connect();
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM departamento";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en Departamento::getAll - " . $e->getMessage());
            return [];
        }
    }
}