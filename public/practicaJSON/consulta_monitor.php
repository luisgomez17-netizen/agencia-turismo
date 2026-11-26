<?php
header("Content-Type: application/json; charset=utf-8");

$producto = [
    "id" => 3,
    "nombre" => "Monitor",
    "precio" => 780000,
    "stock" => 6
];

$idBuscado = 5; // Cambia a 5 para comprobar el escenario 404

if ($idBuscado === $producto["id"]) {
    http_response_code(200);
    echo json_encode($producto, JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(404);
    echo json_encode([
        "mensaje" => "El producto solicitado no existe"
    ], JSON_UNESCAPED_UNICODE);
}