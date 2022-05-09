<style type="text/css">
    ol { list-style-type: lower-alpha; }
</style>

**Entornos Gráficos 2022**

# Práctica 4 - PHP: variables, tipos, operadores, expresiones, estructuras de control

Integrantes: 
* Turconi Gonzalo 
* Abud Santiago 
* Giangiordano Franco

## Ejercicio 1

```php
<?php
// Función doble
function doble($i /* Parámetro $i */ ) {
	// Operador aritmético de multiplicación *
	return $i*2;
}
// Variable $a de tipo bool, operador de asignación =
$a = TRUE;
// Variable $b de tipo string, operador de asignación =
$b = "xyz";
// Variable $c de tipo string, operador de asignación =
$c = 'xyz';
// Variable $d de tipo int, operador de asignación =
$d = 12;
// 4 llamadas a la función gettype con los parámetros $a, $b, $c y $d respecticamente.
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
// Estructura de control if, con la función is_int en su argumento, que toma el parámetro $d
if (is_int($d)) {
	// Operador de asignación combinado *=
	$d += 4;
}
// Estructura de control if, con la función is_string en su argumento, que toma el parámetro $a
if (is_string($a)) {
	echo "Cadena: $a";
}
// Operador de asignación =, operador ternario ?:, operador de incremento ++, operador aritmético de multiplicación *
$d = $a ? ++$d : $d*3;
// Operador de asignación =, operador de incremento ++, se llama a la función doble con $d+1 como argumento.
$f = doble($d++);
// Operador de asignación =, operador combinado de asignación +=
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?>
```
Salida por pantalla: "booleanstringstringinteger1xyzxyz184444"

## Ejercicio 2

Los códigos son equivalentes en los 3 incisos.

## Ejercicio 3

1. Este código lo que hace es ponerle documento 1 como título al HTML y en PHP crear una tabla de 5 filas por dos columnas y con bordes establecidos.
2. Este código crea un formulario en caso de que no se haya enviado, ingresa la edad por entrada (input) y lo asigna a age, y lo envía al script php en ejecución a través del método de post. Si el formulario ya se ha creado, asigna edad a la variable age.<br>En ambos casos evalúa si es mayor de 21 años, indicando que es mayor de edad, y si es menor de 21 años, indicando que es menor de edad.

## Ejercicio 4

La salida que produce será *Warning: undefined variable $flor and $color*

Estos errores se dan porque aún no se ha llamado al archivo externo cuando se ejecuta la primera sentencia, por lo cual no están definidas las variables que se usan.

Luego de llamar al archivo la última sentencia se ejecuta correctamente mostrando el resultado esperado.