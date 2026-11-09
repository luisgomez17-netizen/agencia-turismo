<?php

$producto = [
    "nombre" => "Monitor Gamer",
    "precio" => 750000,
    "cantidad_disponible" => 5
];


$producto["precio"] = 720000;
$producto["cantidad_disponible"] = 10;


$producto["categoria"] = "Tecnología";


echo "Nombre del producto: " . $producto["nombre"] . "<br>";
echo "Precio actualizado: $" . $producto["precio"] . "<br>";
echo "Cantidad disponible actualizada: " . $producto["cantidad_disponible"] . "<br>";
echo "Categoría: " . $producto["categoria"];
?>