<?php
header("Content-Type: application/json; charset=utf-8");

$producto = [
    "id" => 1,
    "nombre" => "Mouse",
    "precio" => 35000
];

$idBuscado = 1; 

if ($idBuscado === $producto["id"]) {
    http_response_code(200);
    echo json_encode($producto, JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(404);
    echo json_encode([
        "mensaje" => "Producto no encontrado"
    ], JSON_UNESCAPED_UNICODE);
}


