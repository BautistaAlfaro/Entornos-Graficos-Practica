
# Práctica 1 - HTML

## Ejercitación 3: Diferencias entre códigos y visualizaciones

### 3.a) Enlaces y anclas

**Primer fragmento:** un enlace a Google que se abre normalmente en la misma pestaña.

**Segundo fragmento:** utiliza `target="_blank"`, por lo que solicita abrir Google en una pestaña o ventana nueva.

**Tercer fragmento:** agrega los atributos `type`, `hreflang`, `charset` y `rel`, que aportan información sobre el recurso enlazado. No modifican sustancialmente la apariencia del enlace. La URL del apunte contiene un espacio en `www. google.com.ar`, que puede hacer que el destino sea incorrecto.

**Cuarto fragmento:** utiliza `href="#"`, que apunta al fragmento vacío del documento actual, no a Google.

**Quinto y sexto fragmentos:** `href="#arriba"` permite desplazarse hasta el elemento identificado como `arriba`. El atributo `name` y el atributo `id` permiten identificar ese destino en HTML 4.01.

### 3.b) Imágenes dentro y fuera de enlaces

**Primer fragmento:** la imagen es independiente y solamente el texto "Click aquí" es un enlace.

**Segundo fragmento:** la imagen está dentro del enlace, pero el texto "Click aquí" queda fuera y no es clickeable.

**Tercer fragmento:** tanto la imagen como el texto forman parte del enlace.

**Cuarto fragmento:** la imagen y el texto son dos enlaces independientes que llevan al mismo destino.

La ubicación del elemento dentro de las etiquetas `<a>` y `</a>` determina qué contenido forma parte del enlace.

### 3.c) Listas

**Primer fragmento:** utiliza `<ul>` y `<li>`, creando una lista desordenada con viñetas.

**Segundo fragmento:** utiliza `<ol>` y `<li>`, creando una lista ordenada y numerada.

**Tercer fragmento:** crea listas ordenadas independientes y utiliza el atributo `value` para establecer los números 2 y 3. Visualmente puede parecer una lista continua, pero estructuralmente son listas separadas.

**Cuarto fragmento:** utiliza un párrafo, números escritos manualmente y saltos de línea `<br>`. No es una lista HTML real. Además, `<blockquote>` se utiliza para citas en bloque.

### 3.d) Tablas y encabezados

**Primera tabla:** utiliza `<th>` para los encabezados y `<td>` para las celdas de datos. Los encabezados suelen mostrarse centrados y en negrita por defecto.

**Segunda tabla:** utiliza `<td>`, `<div align="center">` y `<strong>` para simular encabezados. El fragmento del apunte presenta una estructura de filas incompleta, por lo que el navegador puede interpretarlo de manera diferente.

La diferencia principal es que `<th>` identifica semánticamente un encabezado, mientras que `<td>` representa una celda de datos.

### 3.e) Título de una tabla

**Primera tabla:** utiliza `<caption>` para definir el título propio de la tabla.

**Segunda tabla:** utiliza una celda `<td>` con `colspan="3"` para mostrar el título ocupando tres columnas.

Aunque pueden parecer similares visualmente, `<caption>` representa el título de la tabla, mientras que la celda combinada forma parte de sus filas y columnas.

### 3.f) Combinación de celdas

**Primera tabla:** utiliza `rowspan="2"`, haciendo que una celda ocupe dos filas verticalmente.

**Segunda tabla:** utiliza `colspan="2"`, haciendo que una celda ocupe dos columnas horizontalmente.

- `rowspan`: combina filas.
- `colspan`: combina columnas.

### 3.g) Bordes y separación de celdas

**Primera tabla:** utiliza `border="1"` para mostrar bordes y combina celdas mediante `colspan` y `rowspan`.

**Segunda tabla:** incorpora `cellpadding="0"` y `cellspacing="0"`.

- `cellpadding`: establece el espacio interno entre el contenido y el borde de una celda.
- `cellspacing`: establece el espacio entre celdas.
- `border`: define el borde de la tabla.

La diferencia visual depende de la separación entre celdas y de cómo se combinan las filas y columnas.

### 3.h) Formularios

**Primer formulario:**
- Utiliza `fieldset` para agrupar los controles y `legend` para mostrar el título LOGIN.
- El campo de clave utiliza `type="password"`.
- Los campos tienen valores iniciales mediante `value="xxx"`.
- `method="post"` envía los datos en el cuerpo de la solicitud.
- `action="procesar.php"` indica el destino del envío.
- `target="_blank"` solicita abrir la respuesta en otra pestaña.

**Segundo formulario:**
- Utiliza etiquetas `<label>` asociadas a los controles.
- El campo de clave utiliza `type="text"`, por lo que los caracteres quedan visibles.
- `method="get"` envía los datos como parámetros de la URL.
- `action=""` deja el destino vacío y normalmente envía el formulario al documento actual.

**Tercer formulario:**
- Intenta enviar los datos a una dirección de correo mediante `mailto:`.
- Utiliza `enctype="text/plain"`.
- El campo de clave utiliza `type="password"`.
- El botón es `type="reset"`, por lo que restablece los campos en vez de enviar el formulario.

### 3.i) Elementos button e input

**Primer botón:** utiliza `<button type="button">` y puede contener una imagen, saltos de línea y texto en negrita.

**Segundo botón:** utiliza `<input type="button">` y establece el texto mediante el atributo `value`.

La diferencia principal es que `<button>` permite incluir contenido HTML dentro del botón, mientras que `<input>` es un elemento vacío.

Ambos son botones normales y no envían automáticamente el formulario.

### 3.j) Botones de opción radio

**Primer fragmento:** ambos controles comparten `name="opcion"`, por lo que pertenecen al mismo grupo. Solo se puede seleccionar uno a la vez.

**Segundo fragmento:** los controles utilizan `name="opcion1"` y `name="opcion2"`. Al pertenecer a grupos diferentes, ambos pueden seleccionarse simultáneamente.

El atributo `name` determina el grupo de botones de opción, mientras que `id` identifica cada control.

### 3.k) Listas desplegables

**Primera lista:** utiliza `<select>` sin `multiple`, por lo que permite seleccionar una sola opción. Las opciones están organizadas mediante `<optgroup>`.

**Segunda lista:** utiliza `multiple="multiple"`, permitiendo seleccionar varias opciones. La presentación depende del navegador y del sistema operativo.

El atributo `name="lista[]"` es una convención utilizada para representar una colección de valores al procesar el formulario en determinados servidores.
