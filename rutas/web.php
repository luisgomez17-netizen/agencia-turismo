<?php

$rutas = [

    "GET" => [

        "/paquete" => ["PaqueteController", "index"],
        "/paquete/crear" => ["PaqueteController", "crear"],
        "/paquete/editar" => ["PaqueteController", "editar"],
        "/paquete/eliminar" => ["PaqueteController", "eliminar"],

        "/clientes" => ["ClienteController", "index"],
        "/clientes/crear" => ["ClienteController", "crear"],
        "/clientes/editar" => ["ClienteController", "editar"],
        "/clientes/eliminar" => ["ClienteController", "eliminar"],

        "/proveedores" => ["ProveedorController", "index"],
        "/proveedores/crear" => ["ProveedorController", "crear"],
        "/proveedores/editar" => ["ProveedorController", "editar"],
        "/proveedores/eliminar" => ["ProveedorController", "eliminar"],

        "/ventas" => ["VentaController", "index"],
        "/ventas/crear" => ["VentaController", "crear"],
        "/ventas/editar" => ["VentaController", "editar"],

        "/compras" => ["CompraController", "index"],
        "/compras/crear" => ["CompraController", "crear"],
        "/compras/editar" => ["CompraController", "editar"]

    ],

    "POST" => [

        "/paquete/crear" => ["PaqueteController", "guardar"],
        "/paquete/actualizar" => ["PaqueteController", "actualizar"],

        "/clientes/crear" => ["ClienteController", "guardar"],
        "/clientes/actualizar" => ["ClienteController", "actualizar"],

        "/proveedores/crear" => ["ProveedorController", "guardar"],
        "/proveedores/actualizar" => ["ProveedorController", "actualizar"],

        "/ventas/crear" => ["VentaController", "guardar"],
        "/ventas/actualizar" => ["VentaController", "actualizar"],
        "/ventas/eliminar" => ["VentaController", "eliminar"],

        "/compras/crear" => ["CompraController", "guardar"],
        "/compras/actualizar" => ["CompraController", "actualizar"],
        "/compras/eliminar" => ["CompraController", "eliminar"]

    ]

];
return $rutas;
?>