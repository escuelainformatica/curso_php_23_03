# curso_php_23_03

## variable
Las variable se especifican con el simbolo $ y es recomendado que partan en minuscula.

* $variable : OK
* $Variable : NO CORRECTO
* $nombreApellido:  OK
* $nombre_apellido: NO CORRECTO (antiguo) 

Si la variable es un arreglo, se recomienda escribirlo en plural. En caso contraro, es recomendado usar singular.

```php
$variable=20;
$pais=['nombre'=>'Chile','poblacion'=>30];
$paises=[
    0=>'Chile',
    1=>'argentina',
    2=>'Peru];
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

## arreglo
 asociativos vs los arreglos indexados

### asociativo
Es un arreglo donde el indice es un texto

```php
$pais=['nombre'=>'chile','poblacion'=>20]; // creando un arreglo.

$pais['codigo']='cl';  // agregar un valor

```

### indexado
Es un arreglo donde el indice es un numero (por lo general, es una serie de numeros partiendo por cero)
```php
$paises=[0=>'chile',1=>'argentina']; // creando un arreglo
$paises=['chile','argentina']; // creando un arreglo
$paises[2]='peru'; // agregar un valor.
$paises[]='peru'; // agrega un valor al ultimo indice (en este caso 3) $paises[3]='peru'; 
```

### mezcla de ambos.
```php
 $pais=[0=>'argentina','nombre'=>'chile','poblacion'=>20];
```

### matrix

```php
$matrix=[
    [0,1],
    [2,3]
]
// leer el valor 3
echo $matrix[1][1]; // 3

```

```php
$matrix=[
    [0,1,2], // fila #0
    [3,4,5], // fila #1
    [6,7,8],
];

// leer el valor 5 fila:1, columna:2

echo $matiz[1][2]; // 5
```

## tabla

| producto | precio |
|----------|--------|
| cocacola | 100    |
| fanta    | 200    |

```php
$tabla=[
    ['producto'=>'cocacola','precio'=>100], // fila #0
    ['producto'=>'fanta','precio'=>200], // fila #1
];
echo $tabla[1]['precio']; // 200
echo $tabla['precio'][1]; // error.

```

## operadores

### operadores binarios

Se llaman operadores binarios ya que trabaja con dos valores.

```php
echo 2+3; // suma
echo 2*3; // multiplicar
echo 2-3; // restar
echo 2/3; // dividir.
echo 2%3; // resto de una division.
echo 2+3+4; // sigue siendo binario, se suma 2+3 y luego se suma el resto por 4.
```

### operadores logicos

operadores binarios que devuelve un booleano (true o false)
```php
echo 1<2; // devuelve true si 1 es menor que 2.
echo 1>2; // 1 es mayor que 2
echo 1>=2;  // 1 es mayor o igual a 2.
echo 1==2; // 1 es igual a 2.
echo 1===2; // 1 es igual a 2 siempre y cuando el tipo de datos sea el mismo
echo 1!=2;  // 1 es diferente a 2 (sin comporar los tipos de datos)
echo 1!==2; // igual a 1!=2 pero compara los tipos de datos.
```

```php
echo 1==1; // verdadero
echo '1'==1; // verdadero (type-juggling)
echo '1'===1; // falso (porque el tipo es diferente)
```

### operadores unitario.

```php
  echo !valor; // si el valor es verdadero, lo transforma en falso
               // si el valor es falso, lo transforma en verdadero
```

### operadores ternario.
```php
    echo 1==2 ? "son iguales" : "no son iguales"
```

