<?php

require_once __DIR__ . '/../config/database.php';

$db = new Database();

$conexion = $db->conectar();

if ($conexion) {
    echo "¡Conexión instanciada con éxito";
} else {
    echo "Fallo al conectar.";
}