<?php

require_once __DIR__ . '/../../config/database.php';

class GuiaTuristico
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
            $sql = "SELECT * FROM guiaturistico";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function crear($idTipoGuia, $idCiudad, $idDepartamento, $razonSocial, $nombreProveedor, $direccion, $Telefono)
    {
        try {
            $sql = "INSERT INTO guiaturistico (idTipoGuia, idCiudad, idDepartamento, razonSocial, nombreProveedor, direccion, Telefono)
                    VALUES (:idTipoGuia, :idCiudad, :idDepartamento, :razonSocial, :nombreProveedor, :direccion, :Telefono)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':idTipoGuia', !empty($idTipoGuia) ? (int) $idTipoGuia : null, !empty($idTipoGuia) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idCiudad', !empty($idCiudad) ? (int) $idCiudad : null, !empty($idCiudad) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idDepartamento', !empty($idDepartamento) ? (int) $idDepartamento : null, !empty($idDepartamento) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':razonSocial', $razonSocial, PDO::PARAM_STR);
            $stmt->bindValue(':nombreProveedor', $nombreProveedor, PDO::PARAM_STR);
            $stmt->bindValue(':direccion', $direccion, PDO::PARAM_STR);
            $stmt->bindValue(':Telefono', $Telefono, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM guiaturistico WHERE idGuiaTuristico = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $idTipoGuia, $idCiudad, $idDepartamento, $razonSocial, $nombreProveedor, $direccion, $Telefono)
    {
        try {
            $sql = "UPDATE guiaturistico
                    SET idTipoGuia = :idTipoGuia,
                        idCiudad = :idCiudad,
                        idDepartamento = :idDepartamento,
                        razonSocial = :razonSocial,
                        nombreProveedor = :nombreProveedor,
                        direccion = :direccion,
                        Telefono = :Telefono
                    WHERE idGuiaTuristico = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            $stmt->bindValue(':idTipoGuia', !empty($idTipoGuia) ? (int) $idTipoGuia : null, !empty($idTipoGuia) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idCiudad', !empty($idCiudad) ? (int) $idCiudad : null, !empty($idCiudad) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':idDepartamento', !empty($idDepartamento) ? (int) $idDepartamento : null, !empty($idDepartamento) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':razonSocial', $razonSocial, PDO::PARAM_STR);
            $stmt->bindValue(':nombreProveedor', $nombreProveedor, PDO::PARAM_STR);
            $stmt->bindValue(':direccion', $direccion, PDO::PARAM_STR);
            $stmt->bindValue(':Telefono', $Telefono, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM guiaturistico WHERE idGuiaTuristico = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }
}