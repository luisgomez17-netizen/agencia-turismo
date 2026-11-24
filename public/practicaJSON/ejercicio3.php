<?php
header('Content-Type: application/json; charset=utf-8');

$rutaArchivo = __DIR__ . "/productos.json";
$productos = json_decode(file_get_contents($rutaArchivo), true);

$idBuscado = 2;
$nuevoPrecio = 185000;

foreach ($productos as &$producto) {
    if ($producto["id"] === $idBuscado) {
        $producto["precio"] = $nuevoPrecio;
        break;
    }
}
unset($producto);

$jsonActualizado = json_encode($productos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $jsonActualizado;