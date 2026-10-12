<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - PHP: Arrays y Funciones - Ejercicio 4
 * 
 * Consigna: Analizar la siguiente función y escribir un script para probar su funcionamiento.
 */

function comprobar_nombre_usuario($nombre_usuario) {
    // 1. Compruebo que el tamaño del string sea válido (entre 3 y 20 caracteres)
    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20) {
        echo "El usuario '" . htmlspecialchars($nombre_usuario) . "' no es válido (longitud inválida: " . strlen($nombre_usuario) . " caracteres)<br>\n";
        return false;
    }

    // 2. Compruebo que los caracteres sean los permitidos (alfanuméricos y guión bajo)
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_";
    for ($i = 0; $i < strlen($nombre_usuario); $i++) {
        $caracter = substr($nombre_usuario, $i, 1);
        // Se utiliza comparación estricta === false porque si el carácter está en la posición 0, strpos devuelve 0.
        if (strpos($permitidos, $caracter) === false) {
            echo "El usuario '" . htmlspecialchars($nombre_usuario) . "' no es válido (carácter no permitido: '$caracter')<br>\n";
            return false;
        }
    }

    echo "El usuario '" . htmlspecialchars($nombre_usuario) . "' es válido<br>\n";
    return true;
}

echo "=== Suite de Pruebas de la Función comprobar_nombre_usuario() ===\n<br>";
$casos_prueba = array(
    "ab",                          // Inválido: menor a 3 caracteres
    "juan_perez",                  // Válido
    "usuario123",                  // Válido
    "_Admin_",                     // Válido
    "usuario@dominio",             // Inválido: contiene '@'
    "usuario con espacio",         // Inválido: contiene espacios
    "este_nombre_de_usuario_es_demasiado_largo_para_el_sistema", // Inválido: mayor a 20 caracteres
    "Ana",                         // Válido: exactamente 3 caracteres
    "a!b?c",                       // Inválido: signos de puntuación
);

foreach ($casos_prueba as $caso) {
    comprobar_nombre_usuario($caso);
}
?>
