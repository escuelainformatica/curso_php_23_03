<?php

// compre 5 cocacola y cada una cuesta $2000

$producto="cocacola";
$precio= 2000;
$cantidad = 5;
$subtotal=$precio*$cantidad;


echo "Los productos ";
echo $producto;
echo " costaron :";
echo $precio*$cantidad;
echo "\n";

echo "Los productos ".$producto." costaron :".$precio*$cantidad."\n";
echo "Los $cantidad productos $producto costaron: $subtotal\n";
echo 'Los $cantidad productos $producto costaron: $subtotal\n';


// concatenar
// 1) una forma de concatenar, es unir los valores con un punto ".", ejemplo "hola"."mundo"
// 2) interpolacion "texto $variable" (necesita comilla doble)

