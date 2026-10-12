<?php
/**
 * Conexión a la base de datos prueba - Práctica 7 Ejercicio 8
 */
$link_prueba = mysqli_connect("localhost", "root", "") or die("Error de conexión MySQL: " . mysqli_connect_error());
mysqli_set_charset($link_prueba, "utf8");
mysqli_select_db($link_prueba, "prueba") or die("Error al seleccionar base prueba: " . mysqli_error($link_prueba));
?>
