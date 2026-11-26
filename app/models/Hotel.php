<?php

require_once __DIR__ . '/../../config/database.php';

class Hotel
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM hotel";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function crear($nombre, $ubicacion, $precio)
    {
        try {
            $sql = "INSERT INTO hotel (nombre, ubicacion, precio)
                    VALUES (:nombre, :ubicacion, :precio)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindValue(':ubicacion', $ubicacion, PDO::PARAM_STR);
            $stmt->bindValue(':precio', (string) $precio, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM hotel WHERE idHotel = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $ubicacion, $precio)
    {
        try {
            $sql = "UPDATE hotel
                    SET nombre = :nombre,
                        ubicacion = :ubicacion,
                        precio = :precio
                    WHERE idHotel = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindValue(':ubicacion', $ubicacion, PDO::PARAM_STR);
            $stmt->bindValue(':precio', (string) $precio, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM hotel WHERE idHotel = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }
}