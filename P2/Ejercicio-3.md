

## Ejercicio 3: Analizar reglas CSS

### Código CSS

```css
p.quitar {
    color: red;
}

*.desarrollo {
    font-size: 8px;
}

.importante {
    font-size: 20px;
}
```

### 1. Regla `p.quitar`

Selecciona los elementos `<p>` que tengan la clase `quitar`.

**Efecto:** el texto del párrafo se muestra en rojo.

Se aplica a:

```html
<p class="quitar">
    Este párrafo debe ser quitado de la obra…
</p>
```

No se aplica al encabezado `<h1 class="quitar">`, porque la regla exige que el elemento sea un párrafo.

### 2. Regla `*.desarrollo`

Selecciona cualquier elemento que tenga la clase `desarrollo`.

**Efecto:** establece el tamaño de fuente en 8 píxeles.

Se aplica al primer párrafo:

```html
<p class="desarrollo">
    En este primer párrafo trataremos lo siguiente.
</p>
```

### 3. Regla `.importante`

Selecciona cualquier elemento que tenga la clase `importante`.

**Efecto:** establece el tamaño de fuente en 20 píxeles.

Se aplica al párrafo:

```html
<p class="importante">
    Y este es el párrafo más importante de la obra…
</p>
```

### 4. Elementos sin clases

El tercer párrafo no tiene ninguna de las clases mencionadas, por lo que ninguna de estas reglas se le aplica.

### 5. Elementos con varias clases

El último párrafo tiene las clases `quitar` e `importante`:

```html
<p class="quitar importante">
    Se pueden aplicar varias clases a la vez.
</p>
```

Se aplican dos reglas:
- `p.quitar`: el texto será rojo.
- `.importante`: el tamaño de fuente será de 20 píxeles.

Ambas declaraciones pueden aplicarse simultáneamente porque afectan propiedades diferentes.

### 6. Prioridad de los selectores

La especificidad de `p.quitar` es mayor que la de `.importante`, porque incluye un selector de tipo y uno de clase. Sin embargo, en este ejemplo ambas reglas establecen propiedades diferentes, por lo que no entran en conflicto.

