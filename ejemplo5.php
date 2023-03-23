<?php

$cliente=[
    'nombre'=>'john',
    'apellido'=>'doe',
    'edad'=>33,
    'deuda'=>0,
    'direccion'=>'avenida providencia'
];

var_dump($cliente);

$cliente['nombre']='john modificado'; // modificar solo un campo del arreglo.
echo "La edad es ".$cliente['edad']."\n"; // obtener un campo de un arreglo.

// echo es un operador de PHP (es un comando especial)
// echo("hola"); echo "hello";
// echo <que quiero mostrar>;
// var_dump() es una funcion.
