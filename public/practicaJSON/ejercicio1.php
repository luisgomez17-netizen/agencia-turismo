<?php
header('Content-Type: application/json; charset=utf-8');

$productos = [
    [
        "id" => 1,
        "nombre" => "Mouse inalámbrico",
        "precio" => 45000,
        "stock" => 15,
        "disponible" => true
    ],
    [
        "id" => 2,
        "nombre" => "Teclado mecánico",
        "precio" => 165000,
        "stock" => 8,
        "disponible" => true
    ],
    [
        "id" => 3,
        "nombre" => "Webcam Full HD",
        "precio" => 120000,
        "stock" => 0,
        "disponible" => false
    ]
];

echo json_encode($productos) . "\n\n";
$productos[] = [
    "id" => 4,
    "nombre" => "Monitor 24 pulgadas",
    "precio" => 680000,
    "stock" => 5,
    "disponible" => true
];

echo json_encode($productos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);