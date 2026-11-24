<?php

$json = file_get_contents(__DIR__ . "/productos.json");
$productos = json_decode($json, true);

echo "<h2>Todos los productos</h2>";
foreach ($productos as $producto) {
    echo htmlspecialchars($producto["nombre"]) . " - $" . number_format($producto["precio"], 0, ",", ".") . "<br>";
}

echo "<h2>Productos con precio superior a $100.000</h2>";
foreach ($productos as $producto) {
    if ($producto["precio"] > 100000) {
        echo htmlspecialchars($producto["nombre"]) . " - $" . number_format($producto["precio"], 0, ",", ".") . "<br>";
    }
}