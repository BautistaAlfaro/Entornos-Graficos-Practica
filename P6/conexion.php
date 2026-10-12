<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Manejo de Base de Datos
 * Archivo de Conexión: conexion.php
 * 
 * Implementa el patrón reglamentario de la cátedra con mysqli procedural
 */

$hostname = "localhost";
$nombreUsuario = "root";
$contrasena = "";
$nombreBaseDatos = "Capitales";

// 1. Abrir la conexión con el servidor MySQL
$link = mysqli_connect($hostname, $nombreUsuario, $contrasena) 
        or die("Error al conectar con el servidor MySQL: " . mysqli_connect_error());

// 2. Configurar el conjunto de caracteres a UTF-8
mysqli_set_charset($link, "utf8");

// 3. Seleccionar la base de datos de trabajo
mysqli_select_db($link, $nombreBaseDatos) 
        or die("Error al seleccionar la base de datos '$nombreBaseDatos': " . mysqli_error($link));
?>
