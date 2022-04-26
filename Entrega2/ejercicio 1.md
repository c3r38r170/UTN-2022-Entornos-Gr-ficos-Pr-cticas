# Entrega 2

## 1) ¿Qué es CSS y para qué se usa?

CSS (Cascading StyleSheets, o hojas de estilos en cascada) es un lenguaje de marcado usado para dar estilos a los documentos HTML y sus elementos.

## 2) CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

Las reglas tienen 4 partes:

Un selector. Ejemplo: "#id", ".clase", "padre > hijo", "[atributo="valor"]", ".clase-1, .clase-2".

Un cuerpo, declarado con un par de llaves "{}". En él se encuentran los valores que se aplicarán a los elementos a los que describe el selector.

Dentro del cuerpo tenemos los atributos y valores, agrupados en pares atributo-valor separados por ":", y por ";" entre pares.

Ejemplos de atributos: "color", "height", "width".

Ejemplos de valores: "red", "2rem", "calc(100% - 10px)", "3px 5px", "none"

Cada atributo acepta un tipo de valor; como tamaños, palabras, colores, funciones; dependiendendo de qué definiera (color de fondo, tamaño en altura, tipo de posicionamiento, etc.)

## 3) ¿Cuáles son las tres formas de dar estilo a un documento?

1. CSS en el atributo "style" de los elementos.
2. CSS en la etiqueta "\<style\>".
3. Archivo CSS importado con una etiqueta "\<link\>".

## 4) ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

Selectores de id, clase y etiqueta; en ese orden de precedencia.

Ejemplo:
```html
<style>
	div {
		color: red;
	}
	.azul {
		color: blue;
	}
	#verde {
		color: green;
	}
</style>
<div id="verde">
	Este elemento será verde porque es un div pero tiene una id.
</div>
<div>
	Este elemento será rojo porque solo le aplica la regla por su etiqueta.
	<div class="azul">
		Este elemento será azul.
	</div>
</div>
```

## 5) ¿Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?

Las pseudo-clases son selectores que aplican a un elemento por su estado.
Las pseudo-clases que se suelen aplicar a los vínculos son:
- :link
- :hover
- :visited
- :active

## 6) ¿Qué es la herencia?

Cuando se le aplica CSS a un elemento, hay propiedades que los elementos hijos heredan, o sea que a ellos también se les aplica. Por ejemplo, la propiedad "color".

## 7) ¿En qué consiste el proceso denominado cascada?

El proceso denominado cascada define el orden en el que las reglas se aplican, y este es de arriba a abajo (como la caída de una cascada real), aplicándoslas reglas inferiores después de las superiores.