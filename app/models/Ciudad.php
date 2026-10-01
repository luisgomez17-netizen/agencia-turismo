<?php

require_once __DIR__ . '/../../config/database.php';

class Ciudad {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM ciudad";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function crear($nombreCiudad = null) {
        try {
            $sql = "INSERT INTO ciudad (nombreCiudad) VALUES (:nombreCiudad)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':nombreCiudad', $nombreCiudad, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }
}