# UTN FRRO - Cátedra de Entornos Gráficos
## Práctica N° 6: Manejo de Bases de Datos con PHP y MySQL

---

## Ejercicio 1: Completar y Explicar

### 1. Texto Completado
> Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función **`mysqli_connect()`** (o históricamente `mysql_connect()` en versiones antiguas).  
> Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: **el nombre de host (`$hostname`), el nombre de usuario (`$nombreUsuario`) y la contraseña (`$contrasena`)**.  
> Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función **`mysqli_select_db()`**.  
> Esta función debe pasar como parámetro **el identificador de enlace de conexión (`$link`) y el nombre de la base de datos (`$nombreBaseDatos`)**. *(Nota: en la extensión antigua `mysql_select_db` el orden era inverso, pero en `mysqli_select_db($link, $db)` el identificador de conexión es el primer parámetro).*  
> La función **`mysqli_query()`** se utiliza para **ejecutar una sentencia SQL (SELECT, INSERT, UPDATE, DELETE) en la base de datos especificada** y requiere como parámetros **el identificador de conexión (`$link`) y la cadena de consulta SQL (`$query`)**.  
> La cláusula **`or die()`** se utiliza para **capturar fallos críticos, abortar inmediatamente la ejecución del script PHP en caso de error y mostrar un mensaje descriptivo**, y la función **`mysqli_error()`** se puede usar para **obtener el texto del mensaje de error emitido por el motor MySQL en la última operación ejecutada**.

---

### 2. Explicación del Código de Recorrido

```php
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
    <td><?php echo ($fila[0]); ?></td>
    <td><?php echo ($fila[1]); ?></td>
    <td><?php echo ($fila[2]); ?></td>
</tr>
<tr>
    <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
```

**Análisis técnico:**
1. **`while ($fila = mysqli_fetch_array($vResultado))`:**
   - En cada iteración del bucle, la función `mysqli_fetch_array()` extrae la siguiente fila del conjunto de resultados (`$vResultado`) y avanza el puntero interno.
   - Retorna un array que contiene la información tanto con índices numéricos (`0, 1, 2...`) como con claves asociativas (nombres de columna).
   - Cuando no quedan más filas, devuelve `NULL` (o `false`), finalizando el ciclo `while`.
2. **`$fila[0], $fila[1], $fila[2]`:**
   - Imprime los valores correspondientes a la primera, segunda y tercera columna de la fila actual dentro de celdas HTML `<td>`.
3. **`mysqli_free_result($vResultado)`:**
   - Libera la memoria RAM del servidor asociada al conjunto de resultados devuelto por la consulta. Es una buena práctica fundamental en aplicaciones con alto volumen de datos.
4. **`mysqli_close($link)`:**
   - Cierra formalmente la conexión TCP/socket abierta con el servidor MySQL, liberando los recursos de conexión en el servidor de base de datos.

---

## Ejercicio 2: Arquitectura del Sistema ABML de Ciudades

El sistema implementado en `P6/` cubre todos los requerimientos sobre la base de datos `Capitales` y tabla `ciudades`:

| Archivo | Rol en la Arquitectura ABML |
| :--- | :--- |
| `database.sql` | Definición de tabla (`id`, `ciudad`, `pais`, `habitantes`, `superficie`, `tieneMetro`) e inserción de los 10 registros oficiales. |
| `conexion.php` | Conexión centralizada reutilizable con `mysqli_connect`, `mysqli_set_charset` y `mysqli_select_db`. |
| `index.php` | Menú interactivo de opciones con estética moderna y accesible. |
| `alta_ciudad.php` | Formulario de captura de datos con validaciones de tipo numérico y radios para `tieneMetro`. |
| `alta_ciudad_accion.php` | Inserción mediante `INSERT INTO ciudades ...` con control `or die(mysqli_error())`. |
| `baja_ciudad.php` | Listado con botones directos de eliminación y formulario por ID. |
| `baja_ciudad_accion.php` | Verificación previa de existencia y borrado con `DELETE FROM ciudades WHERE id = ...`. |
| `modificacion_ciudad.php` | Selector de ciudades y formulario con campos precargados automáticamente. |
| `modificacion_ciudad_accion.php` | Actualización con `UPDATE ciudades SET ... WHERE id = ...`. |
| `listado_ciudades.php` | Listado general sin paginación con tabla formateada. |
| `listado_paginado.php` | Listado con paginación dinámica mediante `LIMIT $inicio, $tamano_pagina`, cálculo de páginas con `ceil()` y navegación con botones Anterior/Siguiente. |
