# curso_php_23_03

## variable
Las variable se especifican con el simbolo $ y es recomendado que partan en minuscula.

* $variable : OK
* $Variable : NO CORRECTO
* $nombreApellido:  OK
* $nombre_apellido: NO CORRECTO (antiguo) 


```php
$variable=20;
```

## constante
Las constantes se escriben en mayuscula.

```php
const IVA=20;
```

## funcion
Al igual que las variables, las funciones deben iniciar en minuscula.
El nombre de las funciones usualmente son verbos o acciones.

```php
function ingresar() { }
```

## clase
Las clases deben iniciar en mayuscula.  Por lo general, las clases estan en singular.

* Producto : OK
* Productos : NO.

```php
class Producto {

}
```

## Ejemplo

```php
class Producto {

}
$producto=new Producto();


```