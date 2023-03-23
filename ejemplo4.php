<?php

$alumno="john doe";
$nota1=7;
$nota2=5;
$nota3=3;

// obtener el promedio.

$promedio=($nota1+$nota2+$nota3)/3;

echo "El promedio del alumno $alumno es igual a $promedio\n";

$alumno2="Anna Smith";
$nota21=5;
$nota22=3;
$nota23=4;

$promedio2=($nota21+$nota22+$nota23)/3;
echo "El promedio del alumno $alumno2 es igual a $promedio2\n";

// agrupar variables, array o con un objeto.

// creando un arreglo:
$alumno=['nombre'=>'john doe',"nota1"=>7,"nota2"=>5,"nota3"=>3];
$alumno2=['nombre'=>'anna smith',"nota1"=>5,"nota2"=>3,"nota3"=>4];

$promedio=($alumno['nota1']+$alumno['nota2']+$alumno['nota3'])/3;

echo "El promedio del alumno {$alumno['nombre']} es igual a $promedio\n";


