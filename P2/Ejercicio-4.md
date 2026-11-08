

## Ejercicio 4: Analizar y comparar los efectos de las reglas CSS

### Reglas CSS dadas

```css
* {
    color: green;
}

a:link {
    color: gray;
}

a:visited {
    color: blue;
}

a:hover {
    color: fuchsia;
}

a:active {
    color: red;
}

p {
    font-family: Arial, Helvetica;
    font-size: 10px;
    color: black;
}

.contenido {
    font-size: 14px;
    font-weight: bold;
}
```

### Caso 1: `<body>`

El primer documento tiene un `body` sin clase.

#### Párrafo

```html
<p class="contenido" style="font-weight: normal;">
    Este es un texto...
</p>
```

- La clase `.contenido` establece un tamaño de fuente de 14 px y negrita.
- La regla `p` establece la fuente Arial o Helvetica, tamaño de 10 px y color negro.
- El estilo en línea `font-weight: normal` prevalece sobre la declaración de negrita de la clase, por lo que el texto no aparece en negrita.

**Resultado:** texto negro, tamaño de 14 px, fuente Arial o Helvetica y peso normal.

#### Tabla

La tabla no tiene una clase específica. Por eso, el texto de la celda hereda el color verde de la regla universal, salvo que otra regla aplicable lo reemplace.

#### Enlace

El enlace tiene reglas específicas según su estado:
- `:link`: gris si no fue visitado.
- `:visited`: azul si fue visitado.
- `:hover`: fucsia al pasar el cursor.
- `:active`: rojo mientras se activa.

Estas reglas específicas prevalecen sobre el selector universal `*`.

### Caso 2: `<body class="contenido">`

El segundo documento asigna la clase `contenido` al `body`, pero no al párrafo.

#### Párrafo

```html
<p>Este es un texto...</p>
```

- La regla `p` establece tamaño de 10 px, fuente Arial o Helvetica y color negro.
- La clase `.contenido` aplicada al `body` establece tamaño de 14 px y negrita.
- El tamaño y el peso de fuente no se heredan desde el `body` cuando el párrafo tiene valores propios para esas propiedades.

**Resultado:** texto negro, tamaño de 10 px, fuente Arial o Helvetica y peso normal.

#### Tabla

La tabla no tiene reglas propias para el tamaño o el peso de la fuente. Las propiedades heredables pueden provenir del `body.contenido`, por lo que el texto de la tabla puede aparecer con tamaño de 14 px y negrita.

#### Enlace

El enlace mantiene sus reglas específicas de color según su estado: gris, azul, fucsia o rojo. El tamaño y el peso pueden heredarse del contexto en el que se encuentra.

