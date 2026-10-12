<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - PHP: Arrays y Funciones - Ejercicio 1
 * 
 * Consigna: Indicar si los siguientes códigos son equivalentes. Justificar.
 */

// Código 1: Declaración inicial con la función array()
$a1 = array(
    'color'  => 'rojo',
    'sabor'  => 'dulce',
    'forma'  => 'redonda',
    'nombre' => 'manzana',
    4        // Elemento sin clave explícita -> adquiere clave numérica automática [0]
);

// Código 2: Inicialización elemento por elemento
$a2 = array();
$a2['color']  = 'rojo';
$a2['sabor']  = 'dulce';
$a2['forma']  = 'redonda';
$a2['nombre'] = 'manzana';
$a2[]         = 4; // Sintaxis de corchetes vacíos: asigna al siguiente índice numérico disponible -> [0]

echo "=== Comparación de Arrays ===\n";
echo "Estructura del Array 1:\n";
print_r($a1);

echo "\nEstructura del Array 2:\n";
print_r($a2);

if ($a1 === $a2) {
    echo "\nRESULTADO: SÍ, son estrictamente equivalentes e idénticos en claves, valores y tipos.\n";
} else {
    echo "\nRESULTADO: No son equivalentes.\n";
}

echo "\nJustificación:\n";
echo "En PHP, cuando un elemento se agrega sin clave explícita (como el valor 4 en array() o mediante \$a[] = 4),\n";
echo "el motor le asigna automáticamente el índice entero mayor disponible hasta ese momento, comenzando en 0.\n";
echo "Como las cuatro claves anteriores son de tipo string (asociativas), el primer índice numérico es 0 en ambos casos.\n";
?>
