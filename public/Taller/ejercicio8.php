<?php

$aprendices = [
    [
        "nombre" => "Luis Ángel Gómez",
        "ficha" => "2827456",
        "programa" => "Análisis y Desarrollo de Software (ADSO)"
    ],
    [
        "nombre" => "María Fernanda Marulanda",
        "ficha" => "2827456",
        "programa" => "Análisis y Desarrollo de Software (ADSO)"
    ],
    [
        "nombre" => "Carlos Andrés Pérez",
        "ficha" => "2827457",
        "programa" => "Gestión de Redes de Datos"
    ]
];

echo "Nombre del tercer aprendiz: " . $aprendices[2]["nombre"] . "<br>";
echo "Ficha del primer aprendiz: " . $aprendices[0]["ficha"];
?>