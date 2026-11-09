<?php
$productos = [
    [
        "nombre" => "Monitor",
        "precio" => 750000,
        "cantidad_disponible" => 5
    ],
    [
        "nombre" => "Audífonos Gamer",
        "precio" => 120000,
        "cantidad_disponible" => 15
    ],
    [
        "nombre" => "Disco Sólido SSD 1TB",
        "precio" => 320000,
        "cantidad_disponible" => 8
    ]
];

echo "Nombre del segundo producto: " . $productos[1]["nombre"] . "<br>";
echo "Precio del tercer producto: $" . $productos[2]["precio"] . "<br>";
echo "Cantidad disponible del primer producto: " . $productos[0]["cantidad_disponible"];
?>