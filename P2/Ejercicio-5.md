
## Ejercicio 5: Declarar reglas CSS

### 1. Los textos enfatizados dentro de cualquier título deben ser rojos.

```css
h1 em, h2 em, h3 em, h4 em, h5 em, h6 em {
    color: red;
}
```

Este selector aplica el color rojo a los elementos `<em>` que se encuentran dentro de cualquier título, desde `h1` hasta `h6`.

### 2. Los elementos con atributo `href` dentro de párrafos que estén dentro de un bloque deben ser negros.

```css
div p [href] {
    color: black;
}
```

Selecciona elementos que tengan el atributo `href` y estén dentro de un párrafo que, a su vez, esté dentro de un `div`.

### 3. El texto de las listas no ordenadas dentro del bloque identificado como `ultimo` debe ser amarillo, pero los enlaces deben ser azules.

```css
#ultimo ul {
    color: yellow;
}

#ultimo ul a {
    color: blue;
}
```

La primera regla establece el color amarillo para la lista y su texto heredado. La segunda establece el azul para los enlaces de esa lista.

### 4. Los elementos identificados como `importante` dentro de cualquier bloque deben ser verdes, pero rojos si están dentro de un título.

```css
div #importante {
    color: green;
}

div h1 #importante,
div h2 #importante,
div h3 #importante,
div h4 #importante,
div h5 #importante,
div h6 #importante {
    color: red;
}
```

La primera regla establece el color verde. La segunda, más específica, establece el rojo cuando el elemento está dentro de un título que se encuentra en un `div`.

### 5. Todos los elementos `h1` que tengan el atributo `title`, cualquiera sea su valor, deben ser azules.

```css
h1[title] {
    color: blue;
}
```

Selecciona los encabezados `h1` que tengan el atributo `title`, sin importar el valor de ese atributo.

### 6. Los enlaces de las listas ordenadas deben ser azules si no fueron visitados y violetas si ya fueron visitados. Además, no deben aparecer subrayados.

```css
ol a:link {
    color: blue;
    text-decoration: none;
}

ol a:visited {
    color: violet;
    text-decoration: none;
}
```

La pseudo-clase `:link` selecciona enlaces no visitados y `:visited` selecciona enlaces visitados. `text-decoration: none` quita el subrayado.
