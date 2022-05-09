<style type="text/css">
    ol { list-style-type: lower-alpha; }
</style>

**Entornos Gráficos 2022**

# Práctica 4 - PHP: arrays, funciones

Integrantes: 
* Turconi Gonzalo 
* Abud Santiago 
* Giangiordano Franco

## Ejercicio 2

Los códigos son equivalentes en los 3 incisos.

## Ejercicio 3

1. Este código lo que hace es ponerle documento 1 como título al HTML y en PHP crear una tabla de 5 filas por dos columnas y con bordes establecidos.
2. Este código crea un formulario en caso de que no se haya enviado, ingresa la edad por entrada (input) y lo asigna a age, y lo envía al script php en ejecución a través del método de post. Si el formulario ya se ha creado, asigna edad a la variable age.<br>En ambos casos evalúa si es mayor de 21 años, indicando que es mayor de edad, y si es menor de 21 años, indicando que es menor de edad.

## Ejercicio 4

La salida que produce será *Warning: undefined variable $flor and $color*

Estos errores se dan porque aún no se ha llamado al archivo externo cuando se ejecuta la primera sentencia, por lo cual no están definidas las variables que se usan.

Luego de llamar al archivo la última sentencia se ejecuta correctamente mostrando el resultado esperado.