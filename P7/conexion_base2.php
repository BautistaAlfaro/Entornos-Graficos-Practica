<?php
/**
 * Conexión a la base de datos base2 - Práctica 7 Ejercicio 6
 */
$link2 = mysqli_connect("localhost", "root", "") or die("Error de conexión MySQL: " . mysqli_connect_error());
mysqli_set_charset($link2, "utf8");
mysqli_select_db($link2, "base2") or die("Error al seleccionar base2: " . mysqli_error($link2));
?>
