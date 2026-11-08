
# Práctica N.º 2 — CSS

## Ejercicio 2: Analizar reglas CSS

### Código CSS

```css
p#normal {
    font-family: arial, helvetica;
    font-size: 11px;
    font-weight: bold;
}

*#destacado {
    border-style: solid;
    border-color: blue;
    border-width: 2px;
}

#distinto {
    background-color: #9EC7EB;
    color: red;
}
```

### 1. Primera regla: `p#normal`

**Selector:** `p#normal`

Selecciona los elementos `p` que tengan el identificador `normal`.

**Declaraciones:**
- `font-family: arial, helvetica;`: establece la fuente Arial o, si no está disponible, Helvetica.
- `font-size: 11px;`: establece un tamaño de letra de 11 píxeles.
- `font-weight: bold;`: muestra el texto en negrita.

**Aplicación:** afecta al párrafo con `id="normal"`, cuyo texto es «Este es un párrafo».

### 2. Segunda regla: `*#destacado`

**Selector:** `*#destacado`

El selector universal `*` indica cualquier tipo de elemento, y `#destacado` identifica al elemento cuyo ID es `destacado`.

**Declaraciones:**
- `border-style: solid;`: establece un borde continuo.
- `border-color: blue;`: establece el color azul.
- `border-width: 2px;`: establece un grosor de 2 píxeles.

**Aplicación:** se aplica tanto al párrafo con `id="destacado"` como a la tabla con ese mismo ID. Ambos elementos tendrán un borde azul continuo de 2 píxeles.

### 3. Tercera regla: `#distinto`

**Selector:** `#distinto`

Selecciona el elemento que tenga el identificador `distinto`.

**Declaraciones:**
- `background-color: #9EC7EB;`: establece un fondo celeste.
- `color: red;`: establece el texto en rojo.

**Aplicación:** afecta al último párrafo, cuyo texto será rojo y tendrá fondo celeste.

