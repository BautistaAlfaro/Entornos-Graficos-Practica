# Guía Maestra de Estudio: Entornos Gráficos (UTN FRRO)
## Resumen Teórico y Programático Exhaustivo (Prácticas 3 a 8)

**Cátedra:** Entornos Gráficos — Ingeniería en Sistemas / Electrónica  
**Docentes:** Prof. Ing. Daniela Díaz / Prof. Ing. Julián Butti / Ing. Milardovich  
**Repositorio GitHub:** [BautistaAlfaro/Entornos-Graficos-Practica](https://github.com/BautistaAlfaro/Entornos-Graficos-Practica.git)

---

## Índice General

1. [Estructura del Proyecto y Ramas de Git](#1-estructura-del-proyecto-y-ramas-de-git)
2. [Práctica 3: Arquitectura de la Información y Desarrollo Web](#2-práctica-3-arquitectura-de-la-información-y-desarrollo-web)
3. [Práctica 4: Frontend con Bootstrap 4 y Fundamentos de PHP](#3-práctica-4-frontend-con-bootstrap-4-y-fundamentos-de-php)
4. [Práctica 5: Envío de Correos (`mail()`) y Variables de Sesión](#4-práctica-5-envío-de-correos-mail-y-variables-de-sesión)
5. [Práctica 6: Bases de Datos Relacionales (MySQL / `mysqli`) y ABML Completo](#5-práctica-6-bases-de-datos-relacionales-mysql--mysqli-y-abml-completo)
6. [Práctica 7: Cookies, Sesiones Avanzadas, Carrito y Búsqueda](#6-práctica-7-cookies-sesiones-avanzadas-carrito-y-búsqueda)
7. [Práctica 8: Accesibilidad (WCAG 2.0 / Ley 26.653), Usabilidad, i18n y DIP](#7-práctica-8-accesibilidad-wcag-20--ley-26653-usabilidad-i18n-y-dip)
8. [Gotchas, Errores Clásicos y Tips para Exámenes / Parciales](#8-gotchas-errores-clásicos-y-tips-para-exámenes--parciales)

---

## 1. Estructura del Proyecto y Ramas de Git

El proyecto fue versionado siguiendo las mejores prácticas de la industria con **Conventional Commits** y ramas temáticas dedicadas para cada módulo:

| Rama | Contenido Principal | Archivos Destacados |
| :--- | :--- | :--- |
| `main` | Tronco principal con la solución integral unificada y este informe de estudio | Todos los módulos integrados |
| `practica-3` | Cuestionario teórico sobre Arquitectura de Información y Guía Web Gob Chile | `P3/respuestas_practica_3.md` |
| `practica-4` | Maquetación con Bootstrap 4 y ejercicios de sintaxis/control/arrays de PHP | `bootstrap_*.html`, `ejercicio1.php` a `4.php`, `contador.php`, `comprobar_usuario.php` |
| `practica-5` | Envío de correo HTML con cabeceras MIME y contador de visitas en sesión | `ejercicio1_mail_html.php`, `Formulario.html`, `enviar.php`, `cuenta.php`, `cant_visitas.php` |
| `practica-6` | Conexión MySQL con `mysqli` procedural, script SQL y sistema ABML con paginación | `database.sql`, `conexion.php`, `index.php`, `alta_*.php`, `baja_*.php`, `modificacion_*.php`, `listado_paginado.php` |
| `practica-7` | Persistencia con Cookies (estilos, contador, periódico), Sesiones (login, carrito) y Buscador | `ejemplo_cookies.php`, `periodico.php`, `login.php`, `catalogo.php`, `ver_carrito.php`, `buscador.php` |
| `practica-8` | Accesibilidad Web (WCAG 2.0 / Ley 26.653), Usabilidad, i18n y clasificación de checklist | `P8/respuestas_practica_8.md` |

Para cambiar de rama en cualquier momento:
```bash
git checkout practica-4   # Ver específicamente la solución de la práctica 4
git checkout main         # Volver a la versión consolidada
```

---

## 2. Práctica 3: Arquitectura de la Información y Desarrollo Web

### Conceptos Clave
- **Diseño Web vs Desarrollo Web:**
  - *Diseño Web:* Determina la apariencia visual, composición cromática, tipografía, disposición espacial y experiencia del usuario (UX/UI).
  - *Desarrollo Web:* Implementa la lógica de fondo (*backend*), programación de servicios, persistencia en base de datos, seguridad y procesamiento de transacciones.
- **Sitio Web vs Página Web:** Una *página web* es un único documento digital (ej. `contacto.php`), mientras que un *sitio web* es una jerarquía estructurada de múltiples páginas interrelacionadas bajo un mismo dominio, accesible desde una portada común (*Home Page*).
- **Planificación Inicial:** Define 3 pilares: **Objetivos** (acotados, máximo 5), **Audiencia** (quiénes son, qué buscan) y **Tecnología** (plataformas y limitaciones).
- **Escenarios de Uso:** Historias concretas de usuarios reales interactuando con la interfaz para validar que la estructura responde a necesidades cotidianas.
- **Árboles de Contenido:**
  - *Árbol Organizacional:* Agrupa por áreas institucionales según su lógica de actividad comunitaria.
  - *Árbol Funcional:* Agrupa por tareas y servicios que el usuario busca resolver (*"Pagar impuestos"*, *"Solicitar turnos"*).
- **Sistemas de Navegación:**
  - *Textual:* Menús, barras de enlaces y botones.
  - *Contextual:* Migas de pan (*Breadcrumbs*), URLs semánticas y resaltado del estado activo.
- **Etapas del Diseño Visual (4 etapas sucesivas):**
  1. *Dibujos Lineales / Wireframes:* Distribución espacial en blanco y negro sin diseño gráfico.
  2. *Bocetos de Diseño / Mockups:* Diseños visuales en alta resolución con colores corporativos y tipografía.
  3. *Borradores de Página / Prototipos:* Maquetas HTML/CSS interactivas enlazadas entre sí.
  4. *Maqueta Web:* Sitio definitivo integrado con backend y contenidos reales.
- **Impacto de Tecnologías:**
  - *Flash:* Obsoleto, inaccesible para lectores de pantalla, nulo SEO y bloqueado en navegadores modernos.
  - *AJAX:* Permite interactividad asíncrona pero requiere cuidar el botón "Atrás", las URLs compartibles (*deep linking*) y alertas de accesibilidad mediante `aria-live`.

---

## 3. Práctica 4: Frontend con Bootstrap 4 y Fundamentos de PHP

### Módulo Bootstrap 4
- **Sistema de Rejillas (12 columnas):** La jerarquía mandatoria es:
  ```html
  <div class="container"> <!-- o container-fluid -->
      <div class="row">
          <div class="col-12 col-md-6">...</div>
          <div class="col-12 col-md-6">...</div>
      </div>
  </div>
  ```
- **Breakpoints Responsivos:** `col-` (xs <576px), `col-sm-` (≥576px), `col-md-` (≥768px), `col-lg-` (≥992px), `col-xl-` (≥1200px).
- **Personalización CSS:** El archivo propio (`css/estilo.css`) debe incluirse **después** de Bootstrap en el `<head>` para que las reglas CSS del usuario sobrescriban por cascada a las de la librería.

### Módulo Fundamentos de PHP
- **Tipos de Datos:**
  - *Escalares:* `boolean`, `integer`, `float`, `string`.
  - *Compuestos:* `array`, `object`.
  - *Especiales:* `resource` (punteros a archivos o conexiones de BD), `NULL`.
- **Pre-incremento vs Post-incremento:**
  - `++$d`: Incrementa la variable inmediatamente y retorna el **nuevo** valor.
  - `$d++`: Retorna el valor **actual** para la operación en curso y **luego** incrementa la variable en memoria.
  - *Ejemplo analizado en Ejercicio 1:*
    ```php
    $d = 17;
    $f = doble($d++); // Pasa 17 a la función -> retorna 34 ($f = 34) y luego $d queda en 18.
    ```
- **Bucles y Control:**
  - Sintaxis alternativa: `while (...): ... endwhile;` es equivalente a `while (...) { ... }` y resulta muy legible cuando se intercala HTML.
  - `foreach ($array as $clave => $valor)`: Estructura nativa óptima para matrices.
  - `break` (sale del bucle) vs `continue` (salta a la siguiente iteración).
- **Inclusión de Archivos:**
  - `include`: Si el archivo no existe, emite un `E_WARNING` pero **el script continúa ejecutándose**.
  - `require`: Si el archivo no existe, emite un `E_ERROR` fatal y **detiene la ejecución de inmediato**.
- **Manejo de Archivos en Servidor:**
  - `fopen($archivo, "r")`: Lectura.
  - `fopen($archivo, "w")`: Escritura truncando contenido anterior a 0 bytes.
  - `fread($abrir, filesize($archivo))`: Lectura de bytes.
  - `fwrite($abrir, $contenido)`: Escritura de cadena.
  - `fclose($abrir)`: Cierre indispensable del descriptor de archivo.
- **Validación de Cadenas con `strpos()`:**
  - Siempre usar comparación de tipo estricta: `if (strpos($permitidos, $caracter) === false)`.
  - Si el carácter está en la posición 0 (primer carácter), `strpos` retorna `0`. En una comparación débil (`== false`), `0` evalúa a falso, provocando un falso positivo de carácter inválido.

---

## 4. Práctica 5: Envío de Correos (`mail()`) y Variables de Sesión

### Envío de Emails (`mail()`)
- **Firma Oficial:**
  ```php
  bool mail(string $to, string $subject, string $message [, string $headers [, string $parameters]])
  ```
- **Cabeceras MIME para Correo HTML:**
  ```php
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8\r\n";
  $headers .= "From: Remitente <info@dominio.com>\r\n";
  $headers .= "Reply-To: soporte@dominio.com\r\n";
  ```
- **Formularios de Contacto:** Se procesan por método `POST` accediendo a `$_POST['campo']`, sanitizando cadenas con `htmlspecialchars()` y correos con `filter_var(..., FILTER_SANITIZE_EMAIL)`.

### Variables de Sesión Básicas
- **Regla Fundamental:** `session_start()` debe llamarse **en la primera línea del script**, antes de cualquier salida HTML, espacio en blanco o eco, dado que envía la cookie de sesión en los encabezados HTTP.
- **Persistencia:** Almacenamiento en el array superglobal asociativo `$_SESSION["clave"]`.
- **Destrucción:** `session_destroy()` elimina los datos registrados en el servidor para la sesión actual.

---

## 5. Práctica 6: Bases de Datos Relacionales (MySQL / `mysqli`) y ABML Completo

### Funciones Centrales de `mysqli` Procedural
1. **Conexión:**
   ```php
   $link = mysqli_connect($host, $usuario, $contrasena) 
           or die("Error de conexión: " . mysqli_connect_error());
   ```
2. **Selección de Base:**
   ```php
   mysqli_select_db($link, $nombreBD) 
           or die("Error al seleccionar base: " . mysqli_error($link));
   ```
3. **Ejecución de Consultas:**
   ```php
   $vResultado = mysqli_query($link, $vSql) 
                 or die("Error en query: " . mysqli_error($link));
   ```
4. **Lectura de Resultados:**
   ```php
   while ($fila = mysqli_fetch_array($vResultado)) {
       // $fila[0] o $fila['columna']
   }
   ```
5. **Liberación y Cierre:**
   ```php
   mysqli_free_result($vResultado);
   mysqli_close($link);
   ```

### Patrón de Arquitectura ABML (CRUD)
- **Base de Datos:** `Capitales` -> Tabla `ciudades` (`id`, `ciudad`, `pais`, `habitantes`, `superficie`, `tieneMetro`).
- **Alta (`INSERT INTO`):**
  ```sql
  INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) 
  VALUES ('Rosario', 'Argentina', 1200000, 178.65, 0);
  ```
- **Baja (`DELETE FROM`):**
  ```sql
  DELETE FROM ciudades WHERE id = 3;
  ```
- **Modificación (`UPDATE`):**
  ```sql
  UPDATE ciudades SET habitantes = 1300000, superficie = 180.00 WHERE id = 3;
  ```
- **Listado Paginado con `LIMIT`:**
  - Sintaxis: `LIMIT $offset, $registros_por_pagina`.
  - Fórmula del desplazamiento inicial:
    $$\text{offset} = (\text{página\_actual} - 1) \times \text{registros\_por\_página}$$
  - Cálculo del total de páginas:
    $$\text{total\_páginas} = \lceil \frac{\text{total\_registros}}{\text{registros\_por\_página}} \rceil \quad \longrightarrow \quad \text{ceil}(\$total / \$tamano)$$

---

## 6. Práctica 7: Cookies, Sesiones Avanzadas, Carrito y Búsqueda

### Cookies (`setcookie()`)
- **Persistencia en el Cliente:** Se graban en el navegador. Adecuadas para configuraciones cosméticas (hoja de estilos CSS, preferencias de noticias, último usuario ingresado).
- **Sintaxis:**
  ```php
  setcookie("nombre", $valor, time() + $segundos_de_vida);
  ```
- **Expiración:**
  ```php
  setcookie("nombre", "", time() - 3600); // Marca fecha pasada para forzar borrado
  ```

### Sesiones Avanzadas y Seguridad
- **Protección de Páginas:**
  ```php
  session_start();
  if (!isset($_SESSION['nombre'])) {
      die("Acceso Denegado. Inicie sesión primero.");
  }
  ```
- **Carrito de Compras en Sesión:**
  - Se modela mediante un array asociativo en `$_SESSION['carrito']`:
    ```php
    // La clave es el ID del producto, el valor es la cantidad
    $_SESSION['carrito'][$id_producto]++;
    ```
  - Al consultar el carrito, se recuperan únicamente los IDs activos mediante `implode(',', array_keys($_SESSION['carrito']))` con la cláusula SQL `WHERE id IN (...)`.
- **Buscador con Coincidencias Parciales:**
  ```sql
  SELECT canciones FROM buscador WHERE canciones LIKE '%termino%';
  ```

---

## 7. Práctica 8: Accesibilidad (WCAG 2.0 / Ley 26.653), Usabilidad, i18n y DIP

### Accesibilidad Web (WCAG 2.0)
- **Principios POUR:**
  1. *Perceptible:* Alternativas textuales a imágenes (`alt`), contraste de colores suficiente.
  2. *Operable:* Navegabilidad 100% por teclado, sin trampas de foco.
  3. *Comprensible:* Textos legibles, interfaces predecibles, asistencia en errores de formulario.
  4. *Robusto:* Compatibilidad con tecnologías asistivas presentes y futuras.
- **Niveles de Prioridad y Conformidad:**
  - *Prioridad 1, 2 y 3* dan origen a los niveles de conformidad **A**, **AA** y **AAA**.
  - *Ley Argentina N° 26.653:* Establece la obligatoriedad de accesibilidad en sitios del Estado nacional y organismos regulados, fiscalizada por la **ONTI**. Exige nivel de conformidad base A con 80 puntos de verificación.
- **Herramienta TAW (Test de Accesibilidad Web):** Plataforma para diagnóstico automático y reporte de barreras de accesibilidad.

### Usabilidad Web
- Eficacia, eficiencia y satisfacción del usuario en la consecución de sus objetivos.
- Técnicas: Evaluación heurística (Nielsen), User Testing (pruebas con usuarios reales), Pensamiento en voz alta (*Think Aloud*), Mapas de calor (*Heatmaps*), *Card Sorting*.

### Internacionalización (i18n) vs Localización (l10n)
- **i18n (Ingeniería previa):** Preparar la arquitectura del software para soportar cualquier idioma y cultura (UTF-8, separación de textos en diccionarios, CSS flexible, soporte RTL). Se diseña una sola vez.
- **l10n (Adaptación particular):** Proceso de traducir textos y adaptar monedas, formatos y cultura para un país específico. Se realiza para cada mercado nuevo.

### Independencia de Dispositivos (DIP)
- Capacidad de acceder al contenido web desde cualquier dispositivo (Desktop, móvil, lectores braille) mediante una base de código universal y diseño web responsivo sin exigir plugins propietarios (como Flash).

---

## 8. Gotchas, Errores Clásicos y Tips para Exámenes / Parciales

1. **`Headers already sent`:**
   - *Causa:* Iniciar un archivo PHP con una línea en blanco, un espacio o un BOM UTF-8 antes de `<?php session_start();` o `setcookie()`.
   - *Solución:* Asegurarse de que `<?php` sea el carácter 0 absoluto del archivo, o emplear almacenamiento en búfer de salida con `ob_start()`.
2. **Comparación débil en `strpos()`:**
   - *Error:* `if (strpos($cadena, 'a') == false)` fallará si `'a'` está en la posición `0`.
   - *Regla:* Usar siempre identidad estricta: `if (strpos($cadena, 'a') === false)`.
3. **Orden de parámetros en `mysqli_select_db()` vs `mysql_select_db()`:**
   - En la extensión antigua era `mysql_select_db($db, $link)`.
   - En la extensión moderna reglamentaria es **`mysqli_select_db($link, $db)`** (el enlace `$link` va primero).
4. **Post-incremento en llamadas a función:**
   - En `$f = doble($d++);`, si `$d = 17`, la función recibe `17`. `$d` pasa a valer `18` recién después de transferir el parámetro.
5. **Casteo booleano de `true` a String:**
   - En PHP, `echo true;` imprime `"1"`, mientras que `echo false;` no imprime nada (cadena vacía).
6. **Destrucción de sesiones:**
   - Invocar solo `session_destroy()` no vacía la variable `$_SESSION` en la petición actual ni borra la cookie en el cliente. Para un cierre seguro completo:
     ```php
     $_SESSION = array();
     if (ini_get("session.use_cookies")) {
         $params = session_get_cookie_params();
         setcookie(session_name(), '', time() - 42000, $params["path"]);
     }
     session_destroy();
     ```
7. **Lectura inmediata de Cookies:**
   - Cuando se ejecuta `setcookie('foo', 'bar')`, el valor no está disponible en `$_COOKIE['foo']` de inmediato durante esa misma ejecución, porque `$_COOKIE` se puebla únicamente con las cookies recibidas en la petición HTTP del navegador. Estará visible a partir de la recarga.
