
# Práctica 1 - HTML

## Ejercitación 2: Elementos, etiquetas y atributos

En cada apartado se indica la ubicación habitual del código, su efecto, los elementos utilizados y sus atributos.

### 2.a) Comentario HTML

**Código:**

    <!-- Código controlado el día 12/08/2009 -->

**Ubicación:** puede aparecer tanto en la sección `<head>` como en `<body>`.

**Efecto:** permite agregar comentarios para documentar el código. El comentario no se muestra como contenido normal en el navegador.

**Elemento y etiquetas:** comentario HTML, delimitado por `<!--` y `-->`.

**Atributos:** no posee.

**¿Es obligatorio?** No.

### 2.b) Elemento div

**Código:**

    <div id="bloque1">Contenido del bloque1</div>

**Ubicación:** normalmente dentro de `<body>`.

**Efecto:** crea un contenedor de bloque para agrupar contenido.

**Elemento:** `div`.

**Etiquetas:** `<div>` de apertura y `</div>` de cierre.

**Contenido:** `Contenido del bloque1`.

**Atributo:**
- `id="bloque1"`: identifica al elemento dentro del documento.

**¿Es obligatorio?** Las etiquetas delimitan el elemento; el atributo `id` es opcional.

### 2.c) Elemento img

**Código:**

    <img src="" alt="lugar imagen" id="im1" name="im1"
         width="32" height="32" longdesc="detalles.htm" />

**Ubicación:** normalmente dentro de `<body>`.

**Efecto:** inserta una imagen de 32 × 32 píxeles. Como el atributo `src` está vacío, no se indica una ruta válida a la imagen.

**Elemento:** `img`.

**Etiqueta:** es un elemento vacío; no necesita etiqueta de cierre.

**Atributos:**
- `src=""`: indica la ruta de la imagen.
- `alt="lugar imagen"`: proporciona un texto alternativo.
- `id="im1"`: identifica al elemento.
- `name="im1"`: establece un nombre, utilizado en determinados contextos antiguos.
- `width="32"`: define el ancho.
- `height="32"`: define el alto.
- `longdesc="detalles.htm"`: referencia una descripción extensa en HTML 4.01.

**¿Son obligatorios?** En HTML 4.01, `src` y `alt` son los atributos fundamentales de la imagen. Los restantes son opcionales.

### 2.d) Metadatos

**Código:**

    <meta name="keywords" lang="es"
          content="casa, compra, venta, alquiler " />

    <meta http-equiv="expires"
          content="16-Sep-2019 7:49 PM" />

**Ubicación:** dentro de `<head>`.

**Primer elemento meta:**
- `name="keywords"`: identifica el tipo de metadato.
- `lang="es"`: indica el idioma.
- `content="casa, compra, venta, alquiler "`: contiene las palabras clave.

**Efecto:** proporciona información relacionada con el documento.

**Segundo elemento meta:**
- `http-equiv="expires"`: declara información de expiración.
- `content="16-Sep-2019 7:49 PM"`: contiene el valor de esa información.

**¿Son obligatorios?** En HTML 4.01, se requiere `content` y un atributo que identifique el tipo de metadato, como `name` o `http-equiv`. `lang` es opcional.

### 2.e) Elemento a: enlace

**Código:**

    <a href="http://www.e-style.com.ar/resumen.html"
       type="text/html" hreflang="es" charset="utf-8"
       rel="help">Resumen HTML</a>

**Ubicación:** normalmente dentro de `<body>`.

**Efecto:** crea un enlace con el texto "Resumen HTML" que apunta al recurso indicado por `href`.

**Elemento:** `a`.

**Etiquetas:** `<a>` de apertura y `</a>` de cierre.

**Atributos:**
- `href`: indica el destino del enlace.
- `type="text/html"`: indica el tipo de contenido del recurso.
- `hreflang="es"`: indica el idioma del recurso enlazado.
- `charset="utf-8"`: declara la codificación del recurso en HTML 4.01.
- `rel="help"`: indica que el recurso se relaciona con información de ayuda.

**¿Son obligatorios?** `href` es necesario para crear un hipervínculo convencional. Los demás atributos son opcionales.

### 2.f) Tabla HTML

**Código:**

    <table width="200"
           summary="Datos correspondientes al ejercicio vencido">
        <caption align="top">Título</caption>
        <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">A</th>
            <th scope="col">B</th>
            <th scope="col">C</th>
        </tr>
        <tr>
            <th scope="row">1º</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th scope="row">2º</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

**Ubicación:** dentro de `<body>`.

**Efecto:** crea una tabla con un título, cuatro columnas y dos filas de datos. Las columnas están identificadas por A, B y C, y las filas por 1º y 2º.

**Elementos:**
- `table`: define la tabla.
- `caption`: define el título.
- `tr`: define una fila.
- `th`: define una celda de encabezado.
- `td`: define una celda de datos.

**Atributos:**
- `width="200"`: establece el ancho de la tabla.
- `summary="Datos correspondientes al ejercicio vencido"`: proporciona una descripción de la tabla en HTML 4.01.
- `align="top"`: ubica el título arriba.
- `scope="col"`: indica que el encabezado corresponde a una columna.
- `scope="row"`: indica que el encabezado corresponde a una fila.

**¿Son obligatorios?** Las etiquetas que estructuran la tabla, sus filas y sus celdas son necesarias para definirla correctamente. Los atributos de ancho, alineación y descripción son opcionales.

**Nota:** `&nbsp;` representa un espacio en blanco no separable.
