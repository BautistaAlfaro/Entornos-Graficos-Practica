<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 7: Agregar producto al carrito de compras en sesión
 * Archivo: agregar_carrito.php
 */
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id_producto = intval($_POST['id']);

    // Si el carrito no existe en la sesión, se inicializa como array vacío
    if (!isset($_SESSION['carrito']) || !is_array($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Si ya existe el producto en el carrito, sumamos 1 a la cantidad; si no, lo inicializamos en 1
    if (isset($_SESSION['carrito'][$id_producto])) {
        $_SESSION['carrito'][$id_producto]++;
    } else {
        $_SESSION['carrito'][$id_producto] = 1;
    }
}

// Redirigir de regreso al catálogo o al carrito
header("Location: ver_carrito.php");
exit();
?>
