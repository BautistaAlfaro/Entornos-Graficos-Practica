# UTN FRRO - Cátedra de Entornos Gráficos
## Práctica N° 7: Manejo de Cookies y Sesiones en PHP

---

## 1. Fundamentos Técnicos: Cookies vs Sesiones

| Aspecto | Cookies (`$_COOKIE`) | Sesiones (`$_SESSION`) |
| :--- | :--- | :--- |
| **Ubicación de almacenamiento** | Disco duro / Memoria del navegador cliente | Servidor web (ficheros en `/tmp` o memoria) |
| **Capacidad y tipo de datos** | Solo texto plano; límite de ~4 KB por cookie | Tipos de datos complejos (arrays, objetos, enteros, strings); límite según memoria del servidor |
| **Seguridad e integridad** | Vulnerable a manipulación por el usuario en DevTools; no apto para contraseñas | Alta seguridad; el cliente solo posee un identificador de sesión opaco (`PHPSESSID`) |
| **Persistencia** | Puede durar meses o años según el `timestamp` asignado | Expira al cerrar el navegador o por inactividad (*timeout* del servidor) |
| **Privacidad** | Susceptible a rastreo de navegación publicitaria | Privada por cada conexión cliente-servidor |

---

## 2. Reglas Críticas de Programación en PHP

### 1. Invocación Temprana de Encabezados HTTP
Tanto `setcookie()` como `session_start()` envían cabeceras HTTP de respuesta (`Set-Cookie:`). Por ende:
- **Deben ejecutarse antes de que se imprima cualquier carácter**, etiqueta HTML, espacio en blanco o llamada a `echo`.
- En caso contrario, PHP emitirá el error clásico: `Warning: Cannot modify header information - headers already sent`.
- **Manejo con Output Buffering:** Las funciones `ob_start()` y `ob_end_flush()` activan el almacenamiento en búfer de salida en memoria, permitiendo posponer el envío físico de cabeceras hasta que el script finalice.

### 2. Creación, Lectura y Borrado de Cookies
- **Creación:** `setcookie($nombre, $valor, time() + $segundos_vida);`.
- **Lectura:** A través del array asociativo superglobal `$_COOKIE[$nombre]`. *(Nota: la cookie recién seteada no estará disponible en `$_COOKIE` en la misma petición en que se crea, sino a partir de la siguiente petición que remita el navegador).*
- **Borrado:** Se sobreescribe con un tiempo en el pasado: `setcookie($nombre, "", time() - 3600);`.

### 3. Función `extract()` y directiva `register_globals`
- `extract($_REQUEST)` importa las claves de un array asociativo directamente a la tabla de símbolos del script actual (creando variables locales como `$usuario` a partir de `$_REQUEST['usuario']`).
- **Riesgo:** Genera serias brechas de seguridad si no se sanea, razón por la cual `register_globals` fue deshabilitado y removido en versiones modernas de PHP.

### 4. Hashing con `md5()`
- `md5($cadena)` es una función hash irreversible (*one-way*) de 128 bits (32 caracteres hexadecimales).
- Se utiliza para no almacenar contraseñas en texto plano en la base de datos.
- Para verificar acceso, se aplica `md5()` a la contraseña enviada por el usuario en el login y se compara con el hash almacenado en la base de datos.

---

## 3. Resumen de Ejercicios Desarrollados en `P7/`

- **Ejercicio 1 (`ejemplo_cookies.php`, `verde.css`, `rosa.css`, `negro.css`):** Selección y persistencia de hojas de estilo visuales mediante la cookie `estilo` (duración 90 días).
- **Ejercicio 2 (`contador.php`):** Contador de accesos del lado cliente con cookie `contador`. Da la bienvenida en la primera visita e incrementa en las subsecuentes.
- **Ejercicio 3 (`recordar_usuario.php`):** Formulario que recuerda el último nombre de usuario ingresado precargando el input mediante la cookie `usuario_guardado`.
- **Ejercicio 4 (`periodico.php`, `borrar_cookie.php`):** Periódico digital con filtro de titulares (Política, Economía, Deportes o Todos) persistido en la cookie `noticia_tipo`, con script de eliminación.
- **Ejercicio 5 (`login.php`, `crear_sesion.php`, `ver_sesion.php`):** Flujo de 3 páginas para carga, creación de variables de sesión (`$_SESSION['usuario']`, `$_SESSION['clave']`) y posterior lectura.
- **Ejercicio 6 (`base2.sql`, `conexion_base2.php`, `consulta_alumno.php`, `validar_alumno.php`, `bienvenida.php`):** Autenticación de alumnos por correo contra la base de datos `base2`, registro de nombre en sesión y control de acceso con `isset($_SESSION['nombre'])`.
- **Ejercicio 7 (`compras.sql`, `conexion_compras.php`, `catalogo.php`, `agregar_carrito.php`, `ver_carrito.php`):** Carrito de compras transaccional completo persistiendo los productos en la base de datos `Compras` y los ítems/cantidades seleccionados en `$_SESSION['carrito']`.
- **Ejercicio 8 (`prueba.sql`, `conexion_prueba.php`, `buscador.php`):** Motor de búsqueda de canciones en la tabla `buscador` de la base `prueba` mediante coincidencias parciales con la cláusula SQL `LIKE '%...%'`.
