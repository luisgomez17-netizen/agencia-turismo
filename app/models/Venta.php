<?php

require_once __DIR__ . '/../../config/database.php';

class Venta
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
            $sql = "SELECT * FROM venta";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function crear($idCliente, $idReserva, $iva, $valorTotal)
    {
        try {
            $sql = "INSERT INTO venta (idCliente, idReserva, IVA, valorTotal)
                    VALUES (:idCliente, :idReserva, :iva, :valorTotal)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':idCliente', !empty($idCliente) ? (int) $idCliente : null, !empty($idCliente) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idReserva', !empty($idReserva) ? (int) $idReserva : null, !empty($idReserva) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':iva', (string) $iva, PDO::PARAM_STR);
            $stmt->bindValue(':valorTotal', (string) $valorTotal, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM venta WHERE idVenta = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $idCliente, $idReserva, $iva, $valorTotal)
    {
        try {
            $sql = "UPDATE venta
                    SET idCliente = :idCliente,
                        idReserva = :idReserva,
                        IVA = :iva,
                        valorTotal = :valorTotal
                    WHERE idVenta = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            $stmt->bindValue(':idCliente', !empty($idCliente) ? (int) $idCliente : null, !empty($idCliente) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idReserva', !empty($idReserva) ? (int) $idReserva : null, !empty($idReserva) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':iva', (string) $iva, PDO::PARAM_STR);
            $stmt->bindValue(':valorTotal', (string) $valorTotal, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM venta WHERE idVenta = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }
}