<?php

require_once __DIR__ . '/../../config/database.php';

class Cliente {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM cliente";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function crear($nombre, $apellido, $idTipoDoc, $numDoc, $correo, $telefono, $direccion, $idCiudad) {
        try {
            $sql = "INSERT INTO cliente (nombre, apellido, idTipoDoc, numDoc, correo, telefono, direccion, idCiudad) 
                    VALUES (:nombre, :apellido, :idTipoDoc, :numDoc, :correo, :telefono, :direccion, :idCiudad)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindValue(':apellido', $apellido, PDO::PARAM_STR);
            $stmt->bindValue(':idTipoDoc', !empty($idTipoDoc) ? $idTipoDoc : null, !empty($idTipoDoc) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':numDoc', $numDoc, PDO::PARAM_STR);
            $stmt->bindValue(':correo', $correo, PDO::PARAM_STR);
            $stmt->bindValue(':telefono', $telefono, PDO::PARAM_STR);
            $stmt->bindValue(':direccion', $direccion, PDO::PARAM_STR);
            $stmt->bindValue(':idCiudad', !empty($idCiudad) ? $idCiudad : null, !empty($idCiudad) ? PDO::PARAM_INT : PDO::PARAM_NULL);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }
}