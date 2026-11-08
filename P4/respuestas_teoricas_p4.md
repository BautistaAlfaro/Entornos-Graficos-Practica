# UTN FRRO - Cátedra de Entornos Gráficos
## Práctica N° 4: Bootstrap 4 y Fundamentos de PHP

---

## 1. Módulo Bootstrap 4

### Práctica 1: Introducción e Instalación
- **Integración:** Se utiliza el CDN oficial de Bootstrap 4.3.1 (CSS) junto con jQuery 3.3.1 slim, Popper.js 1.14.7 y Bootstrap JS en el orden correcto de dependencias.
- **Estructura base:** Clase `.container` para centrado responsivo con márgenes automáticos, fila `.row` como contenedor flexible (Flexbox), y columnas con clases `.col-*`.
- **Sobrescritura CSS:** Archivo `css/estilo.css` enlazado con posterioridad a Bootstrap para respetar la especificidad de cascada en `.contenedor`.

### Práctica 2: Sistema de Grillas (Grid System de 12 Columnas)
- **Breakpoint `sm`:** Se establece en `576px`. Resoluciones menores a 576px son consideradas móviles (`xs` o base).
- **Diseño Adaptativo:**
  - Para pantallas de escritorio (`>sm` / `col-md-*`): La fila superior utiliza `col-12` (100% de ancho) y la segunda fila se divide en dos columnas de `col-md-6` (50% cada una).
  - Para pantallas móviles (`<=sm`): Las columnas de la segunda fila adoptan `col-12`, generando 3 bloques verticales apilados al 100%.
- **Mockup con Sidebar:**
  - Sidebar: Ocupa 3 columnas en desktop (`col-md-3`) y 12 en mobile (`col-12`).
  - Área central: Ocupa 9 columnas (`col-md-9`), conteniendo el área verde superior, 4 módulos violetas (`col-md-3`), 2 módulos adicionales y el bloque celeste inferior derecho (`col-md-6`).

### Práctica 3: Componentes y Formularios
- **Alertas (`.alert .alert-success`):** Notificación visual contextual con botón de cierre descartable (`.alert-dismissible`).
- **Ventana Modal (`.modal`):** Contenedor emergente accesible mediante atributos de datos `data-toggle="modal"` y `data-target="#idModal"`. Consta de `.modal-header`, `.modal-body` y `.modal-footer` con botones de cierre y guardado.
- **Tarjetas (`.card`):** Contenedor moderno y flexible con `.card-body`, `.card-title`, `.card-subtitle` y `.card-text`.
- **Carrusel / Slider (`.carousel .slide`):** Componente dinámico con indicadores ordenados, controles anterior/siguiente y transiciones automáticas `data-ride="carousel"`.
- **Formularios (`.form-group .form-control`):** Etiquetas `<label>` asociadas semánticamente con campos mediante `for` e `id`, validación requerida y estilización adaptable.

---

## 2. Módulo PHP: Variables, Operadores y Estructuras de Control

### Ejercicio 1: Análisis Exhaustivo del Código
1. **Variables y Tipos:**
   - `$a = TRUE;` (Boolean).
   - `$b = "xyz";` (String con comillas dobles).
   - `$c = 'xyz';` (String con comillas simples).
   - `$d = 12;` (Integer).
   - `$f = 34;` (Integer, resultado de `doble($d++)`).
   - `$g = 44;` (Integer, resultado de asignación `$f += 10`).
2. **Operadores:**
   - Aritméticos: Multiplicación (`*`), suma (`+`).
   - Asignación compuesta: `+=` (`$d += 4`, `$f += 10`).
   - Incremento: Pre-incremento (`++$d`), post-incremento (`$d++`).
   - Ternario: `?:` (`$a ? ++$d : $d*3`).
   - Lógicos y tipos: `is_int()`, `is_string()`.
3. **Estructuras de Control:**
   - Condicionales `if`.
   - Operador ternario condicional.
4. **Traza y Salida en Pantalla:**
   - `gettype($a)` imprime `boolean`.
   - `gettype($b)` y `gettype($c)` imprimen `string`.
   - `gettype($d)` imprime `integer`.
   - `$d` pasa de 12 a 16 (`$d += 4`).
   - `$a ? ++$d : ...`: como `$a` es `true`, se evalúa `++$d`, incrementando `$d` a 17.
   - `doble($d++)`: post-incremento pasa 17 a la función (devuelve 34) y luego `$d` pasa a 18. `$f = 34`.
   - `$g = $f += 10`: `$f` se incrementa a 44 y se asigna a `$g` (44).
   - `echo $a, $b, $c, $d, $f , $g;` imprime: `1xyzxyz184444` (nótese que en PHP el booleano `true` se convierte a string como `"1"`).

### Ejercicio 2: Equivalencias
- **a) `while` vs `while: ... endwhile;`:** SÍ son equivalentes. La sintaxis alternativa con dos puntos y `endwhile` es común cuando se mezcla PHP dentro de plantillas HTML.
- **b) Variantes de bucles:** Todas las variantes del bucle imprimen los enteros del 1 al 10 de manera idéntica (`12345678910`).
- **c) `if-elseif` vs `switch-case`:** SÍ son funcionalmente equivalentes gracias a que cada `case` contiene su respectiva sentencia `break`. Si se omitiera el `break`, el switch caería secuencialmente a los casos siguientes (*fall-through*).

### Ejercicio 3: Interpretación de Código
- **3.a:** Generación matricial de tablas HTML mediante bucles anidados (`5` filas $\times$ `2` columnas).
- **3.b:** Formulario autocontenido (*self-submitting form*) que verifica la edad recibida por método POST. Si la edad es mayor o igual a 21, informa mayoría de edad; caso contrario, minoría de edad.

### Ejercicio 4: Inclusión de Archivos y Ámbito
- La sentencia `include 'datos.php'` incorpora las variables `$flor` y `$color` en el ámbito local. Antes del `include`, acceder a ellas produce un Notice/Warning de variable indefinida y la cadena omite sus valores. Tras el `include`, se sustituyen por "clavel" y "blanco".

### Ejercicio 5: Contador Persistente en Archivo
- Se utilizan funciones nativas del sistema de archivos:
  - `fopen($archivo, "r")`: Apertura para solo lectura.
  - `fread($abrir, filesize($archivo))`: Lectura completa del contenido existente.
  - `fclose($abrir)`: Cierre obligatorio del descriptor de archivo.
  - `fopen($archivo, "w")`: Apertura para escritura (trunca el archivo a longitud cero).
  - `fwrite($abrir, $cont)`: Escritura del valor incrementado.

---

## 3. Módulo PHP: Arrays y Funciones

### Ejercicio 1: Sintaxis de Arrays
- Declarar `$a = array('color'=>'rojo', ..., 4);` y asignar individualmente `$a['color']='rojo'; ... $a[] = 4;` son **estrictamente equivalentes**. El motor asigna el índice entero `0` al elemento 4 en ambos casos.

### Ejercicio 2: Matrices Multidimensionales y `unset()`
- **2.a:** `$matriz["x"]` imprime `"bar"`; `$matriz[12]` imprime `"1"` (`true`).
- **2.b:** `$matriz["unamatriz"][6]` es `5`; en `[13]` es `9`; en `["a"]` es `42`.
- **2.c:** Tras insertar elementos, `unset($matriz[5])` elimina dicha clave; y `unset($matriz)` destruye la variable completa de la memoria, no generando ninguna salida por pantalla.

### Ejercicio 3: `getdate()` y Funciones
- `getdate()` retorna un array asociativo con claves como `hours`, `minutes`, `seconds`, `mday`, `mon`, `year`.
- La función `sumar($sumando1, $sumando2)` ilustra el paso de parámetros por valor y su combinación con operadores aritméticos.

### Ejercicio 4: Función `comprobar_nombre_usuario()`
- Valida dos invariantes críticas:
  1. **Longitud:** Mediante `strlen()`, debe ubicarse estrictamente en el intervalo $[3, 20]$.
  2. **Juego de caracteres:** Itera con `substr()` y verifica pertenencia mediante `strpos($permitidos, $caracter) !== false`. Es mandatorio el operador de identidad estricta `=== false`, dado que si el carácter permitido se encuentra en la posición cero (`'a'`), `strpos()` devuelve `0`, lo cual en una comparación no estricta (`== false`) evaluaría erróneamente como falso.
