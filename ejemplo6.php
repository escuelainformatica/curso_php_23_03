<?php
// es una definicion (si construimos una casa, la clase es un plano)
class Cliente {
    public $nombre;
    public $apellido;
    public $edad;
    public $deuda;
    public $direccion;
}


$cliente=new Cliente();  // creamos una variable llamada cliente del tipo Cliente
                         // se creo una instancia de la clase Cliente

$cliente->nombre="john";
$cliente->apellido="doe";
$cliente->deuda=33;
$cliente->direccion="avenida providencia";
$cliente->edad=55;

var_dump($cliente);

//$cliente->edadx=55;

$cliente=[];
$cliente['nombre']="john";
$cliente['apellido']="john";
//$cliente['edadx']=55;




