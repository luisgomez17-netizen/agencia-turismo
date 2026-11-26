<?php

$rutas = [
    "GET" => [
        "/" => ["HomeController", "index"],
        "/api/paquetes" => ["PaqueteController", "listarJSON"],

        "/paquete" => ["PaqueteController", "index"],
        "/paquete/crear" => ["PaqueteController", "crear"],
        "/paquete/editar" => ["PaqueteController", "editar"],
        "/paquete/eliminar" => ["PaqueteController", "eliminar"],

        "/clientes" => ["ClienteController", "index"],
        "/clientes/crear" => ["ClienteController", "crear"],
        "/clientes/editar" => ["ClienteController", "editar"],
        "/clientes/eliminar" => ["ClienteController", "eliminar"],

        "/proveedores" => ["GuiaTuriController", "index"],
        "/proveedores/crear" => ["GuiaTuriController", "crear"],
        "/proveedores/editar" => ["GuiaTuriController", "editar"],
        "/proveedores/eliminar" => ["GuiaTuriController", "eliminar"],

        "/transporte" => ["TransporteController", "index"],
        "/reservas" => ["ReservaController", "index"],
        "/pagos" => ["PagoController", "index"],

        "/ventas" => ["VentaController", "index"],
        "/ventas/crear" => ["VentaController", "crear"],
        "/ventas/editar" => ["VentaController", "editar"],
        "/ventas/eliminar" => ["VentaController", "eliminar"],

        "/hoteles" => ["HotelController", "index"],
        "/hoteles/crear" => ["HotelController", "crear"],
        "/hoteles/editar" => ["HotelController", "editar"],
        "/hoteles/eliminar" => ["HotelController", "eliminar"],

        "/reservas" => ["ReservaController", "index"],
        "/reservas/crear" => ["ReservaController", "crear"],
        "/reservas/editar" => ["ReservaController", "editar"],
        "/reservas/eliminar" => ["ReservaController", "eliminar"],
    ],

    "POST" => [
        "/paquete/crear" => ["PaqueteController", "guardar"],
        "/paquete/actualizar" => ["PaqueteController", "actualizar"],

        "/clientes/crear" => ["ClienteController", "guardar"],
        "/clientes/actualizar" => ["ClienteController", "actualizar"],

        "/proveedores/crear" => ["GuiaTuriController", "guardar"],
        "/proveedores/actualizar" => ["GuiaTuriController", "actualizar"],
        "/proveedores/eliminar" => ["GuiaTuriController", "eliminar"],

        "/ventas/crear" => ["VentaController", "guardar"],
        "/ventas/actualizar" => ["VentaController", "actualizar"],
        "/ventas/eliminar" => ["VentaController", "eliminar"],

        "/hoteles/crear" => ["HotelController", "guardar"],
        "/hoteles/actualizar" => ["HotelController", "actualizar"],
        "/hoteles/eliminar" => ["HotelController", "eliminar"],

        "/reservas/crear" => ["ReservaController", "guardar"],
        "/reservas/actualizar" => ["ReservaController", "actualizar"],
        "/reservas/eliminar" => ["ReservaController", "eliminar"],
    ]
];

return $rutas;