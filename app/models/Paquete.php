<?php

require_once __DIR__ . '/../../config/database.php';

class Paquete
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM paquete";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $descripcion, $precio, $duracion, $cuposDisponibles, $idGuia, $paquete_hotel, $paquete_transporte)
    {
        try {
            $sql = "INSERT INTO paquete (
                        Nombre,
                        Descripcion,
                        Precio,
                        Duracion,
                        cuposDisponibles,
                        idGuia,
                        paquete_hotel,
                        paquete_transporte
                    ) VALUES (
                        :nombre,
                        :descripcion,
                        :precio,
                        :duracion,
                        :cuposDisponibles,
                        :idGuia,
                        :paquete_hotel,
                        :paquete_transporte
                    )";

            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindValue(':descripcion', $descripcion, PDO::PARAM_STR);
            $stmt->bindValue(':precio', $precio);
            $stmt->bindValue(':duracion', (int) $duracion, PDO::PARAM_INT);
            $stmt->bindValue(':cuposDisponibles', (int) $cuposDisponibles, PDO::PARAM_INT);
            $stmt->bindValue(':idGuia', !empty($idGuia) ? (int) $idGuia : null, !empty($idGuia) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':paquete_hotel', !empty($paquete_hotel) ? (int) $paquete_hotel : null, !empty($paquete_hotel) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':paquete_transporte', !empty($paquete_transporte) ? (int) $paquete_transporte : null, !empty($paquete_transporte) ? PDO::PARAM_INT : PDO::PARAM_NULL);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM paquete WHERE idPaquete = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $descripcion, $precio, $duracion, $cupos)
    {
        try {
            $sql = "UPDATE paquete
                    SET Nombre = :nombre,
                        Descripcion = :descripcion,
                        Precio = :precio,
                        Duracion = :duracion,
                        cuposDisponibles = :cupos
                    WHERE idPaquete = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindValue(':descripcion', $descripcion, PDO::PARAM_STR);
            $stmt->bindValue(':precio', $precio);
            $stmt->bindValue(':duracion', (int) $duracion, PDO::PARAM_INT);
            $stmt->bindValue(':cupos', (int) $cupos, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM paquete WHERE idPaquete = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error de BD: " . $e->getMessage();
            exit();
        }
    }
}