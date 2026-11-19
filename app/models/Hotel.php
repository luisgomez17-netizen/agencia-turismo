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

    public function crear($nombre, $direccion, $telefono, $email, $estrellas) {
        try {
            $sql = "INSERT INTO hotel (Nombre, Direccion, Telefono, Email, Estrellas) 
                    VALUES (:nombre, :direccion, :telefono, :email, :estrellas)";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(':nombre', $nombre);
            $stmt->bindValue(':direccion', $direccion);
            $stmt->bindValue(':telefono', $telefono);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':estrellas', $estrellas);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en hotel::crear - " . $e->getMessage());
            return false;
        }
    }
}