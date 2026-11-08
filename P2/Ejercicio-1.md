
# Práctica N.º 2 — CSS

## Ejercicio 1: Introducción a CSS

### 1. ¿Qué es CSS y para qué se usa?

CSS (Cascading Style Sheets u Hojas de Estilo en Cascada) es un lenguaje que se utiliza para definir la presentación visual de un documento HTML. Permite establecer colores, fuentes, tamaños, márgenes, bordes y la distribución de los elementos de una página web.

### 2. ¿Cómo funcionan las reglas CSS?

Las reglas CSS están formadas por un selector y un bloque de declaraciones.

Cada declaración contiene una propiedad y un valor.

Ejemplo:

```css
p {
    color: red;
    font-size: 16px;
}
```

En este caso, `p` es el selector, `color` y `font-size` son propiedades, y `red` y `16px` son sus valores.

### 3. ¿Cuáles son las tres formas de dar estilo a un documento?

- **Estilo en línea:** se escribe en el atributo `style` de un elemento HTML.
- **Hoja de estilo interna:** se define dentro de la etiqueta `<style>` del documento HTML.
- **Hoja de estilo externa:** se escribe en un archivo `.css` independiente y se vincula mediante `<link>`.

### 4. ¿Cuáles son los selectores más utilizados? Ejemplifique.

- **Universal:** `*` selecciona todos los elementos.
- **De tipo:** `p` selecciona todos los párrafos.
- **De clase:** `.destacado` selecciona los elementos que tienen esa clase.
- **De identificador:** `#titulo` selecciona el elemento con ese ID.
- **Descendiente:** `div p` selecciona los párrafos dentro de un `div`.
- **Agrupado:** `h1, h2` aplica las reglas a ambos tipos de encabezado.

### 5. ¿Qué es una pseudo-clase? ¿Cuáles son las más utilizadas en vínculos?

Una pseudo-clase permite aplicar estilos a un elemento según su estado o situación.

Las más utilizadas en vínculos son:

- `:link`: enlace que todavía no fue visitado.
- `:visited`: enlace visitado.
- `:hover`: cuando el cursor pasa sobre el enlace.
- `:active`: mientras se está activando el enlace.

### 6. ¿Qué es la herencia?

La herencia es el mecanismo por el cual algunos estilos definidos en un elemento se transmiten a sus descendientes. Por ejemplo, el color del texto establecido en un contenedor puede heredarse en los párrafos que contiene. No todas las propiedades se heredan.

### 7. ¿En qué consiste la cascada?

La cascada es el mecanismo que determina qué declaración CSS se aplica cuando varias reglas afectan al mismo elemento. Para resolver los conflictos se consideran, entre otros factores, la importancia, el origen, la especificidad de los selectores y el orden de las declaraciones.
