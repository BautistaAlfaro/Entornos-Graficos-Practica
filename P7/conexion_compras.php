<?php
/**
 * Conexión a la base de datos Compras - Práctica 7 Ejercicio 7
 */
$link_compras = mysqli_connect("localhost", "root", "") or die("Error de conexión MySQL: " . mysqli_connect_error());
mysqli_set_charset($link_compras, "utf8");
mysqli_select_db($link_compras, "Compras") or die("Error al seleccionar base Compras: " . mysqli_error($link_compras));
?>
