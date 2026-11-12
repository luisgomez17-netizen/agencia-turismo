<?php


require_once __DIR__ . '/../../config/database.php';

class Paquete {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM paquete";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $descripcion, $precio, $duracion, $cuposDisponibles, $idGuia, $paquete_hotel, $paquete_transporte) {
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
            $stmt->bindValue(':duracion', $duracion, PDO::PARAM_INT);
            $stmt->bindValue(':cuposDisponibles', $cuposDisponibles, PDO::PARAM_INT);
            $stmt->bindValue(':idGuia', !empty($idGuia) ? $idGuia : null, !empty($idGuia) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':paquete_hotel', !empty($paquete_hotel) ? $paquete_hotel : null, !empty($paquete_hotel) ? PDO::PARAM_INT : PDO::PARAM_NULL);
            $stmt->bindValue(':paquete_transporte', !empty($paquete_transporte) ? $paquete_transporte : null, !empty($paquete_transporte) ? PDO::PARAM_INT : PDO::PARAM_NULL);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "<h1>Error de Base de Datos:</h1> " . $e->getMessage();
            exit();
        }
    }

    
    public function getById($id) {
    $sql = "SELECT * FROM paquete WHERE idPaquete = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Método para buscar un paquete por su ID para el formulario de edición
public function obtenerPorId($id)
{
    $sql = "SELECT * FROM paquete WHERE idPaquete = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Método para guardar los cambios en la base de datos
public function actualizar($id, $nombre, $descripcion, $precio, $duracion, $cupos)
{
    try {
        $sql = "UPDATE paquete SET Nombre = :nombre, Descripcion = :descripcion, Precio = :precio, Duracion = :duracion, cuposDisponibles = :cupos WHERE idPaquete = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':precio' => $precio,
            ':duracion' => $duracion,
            ':cupos' => $cupos
        ]);
    } catch (PDOException $e) {
        return false;
    }
}

    public function eliminar($id)
{
    try {
        $sql = "DELETE FROM paquete WHERE idPaquete = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id]);
    } catch (PDOException $e) {
        // Muestra el error exacto en pantalla en lugar de ocultarlo silenciosamente
        echo "Error de BD: " . $e->getMessage();
        exit();
    }
}

}