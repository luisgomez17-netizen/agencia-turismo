<?php

require_once __DIR__ . '/../../config/database.php';

class Reserva
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
            $sql = "SELECT * FROM reserva";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function crear($idCliente, $idPaquete, $fecha, $cantidadPersonas, $estado)
    {
        try {
            $sql = "INSERT INTO reserva (idCliente, idPaquete, Fecha, CantidadPersonas, Estado)
                    VALUES (:idCliente, :idPaquete, :fecha, :cantidadPersonas, :estado)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':idCliente', !empty($idCliente) ? (int) $idCliente : null, !empty($idCliente) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idPaquete', !empty($idPaquete) ? (int) $idPaquete : null, !empty($idPaquete) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':fecha', $fecha, PDO::PARAM_STR);
            $stmt->bindValue(':cantidadPersonas', (int) $cantidadPersonas, PDO::PARAM_INT);
            $stmt->bindValue(':estado', $estado, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM reserva WHERE idReserva = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $idCliente, $idPaquete, $fecha, $cantidadPersonas, $estado)
    {
        try {
            $sql = "UPDATE reserva
                    SET idCliente = :idCliente,
                        idPaquete = :idPaquete,
                        Fecha = :fecha,
                        CantidadPersonas = :cantidadPersonas,
                        Estado = :estado
                    WHERE idReserva = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            $stmt->bindValue(':idCliente', !empty($idCliente) ? (int) $idCliente : null, !empty($idCliente) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idPaquete', !empty($idPaquete) ? (int) $idPaquete : null, !empty($idPaquete) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':fecha', $fecha, PDO::PARAM_STR);
            $stmt->bindValue(':cantidadPersonas', (int) $cantidadPersonas, PDO::PARAM_INT);
            $stmt->bindValue(':estado', $estado, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM reserva WHERE idReserva = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }
}