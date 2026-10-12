<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - PHP: Arrays y Funciones - Ejercicio 2
 * 
 * Consigna: En cada caso, indicar las salidas correspondientes. Justificar.
 */

echo "=== Caso 2.a ===\n";
$matrizA = array("x" => "bar", 12 => true);
echo "Salida esperada de \$matriz[\"x\"] . \$matriz[12]:\n";
echo $matrizA["x"];    // Imprime "bar"
echo $matrizA[12];     // Imprime "1" (true en PHP se castea a string como "1")
echo "\nSalida concatenada: " . $matrizA["x"] . $matrizA[12] . "\n\n";

echo "=== Caso 2.b ===\n";
$matrizB = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo "Salidas correspondientes:\n";
echo "\$matriz['unamatriz'][6] = " . $matrizB["unamatriz"][6] . "\n";   // 5
echo "\$matriz['unamatriz'][13] = " . $matrizB["unamatriz"][13] . "\n"; // 9
echo "\$matriz['unamatriz']['a'] = " . $matrizB["unamatriz"]["a"] . "\n"; // 42
echo "Salida consecutiva directa: " . $matrizB["unamatriz"][6] . $matrizB["unamatriz"][13] . $matrizB["unamatriz"]["a"] . "\n\n";

echo "=== Caso 2.c ===\n";
$matrizC = array(5 => 1, 12 => 2);
$matrizC[] = 56;         // Índice automático: el máximo entero era 12, luego toma el índice 13 (13 => 56)
$matrizC["x"] = 42;      // Agrega elemento asociativo "x" => 42
unset($matrizC[5]);      // Elimina la clave 5 (con valor 1)
unset($matrizC);         // Destruye completamente la variable $matriz del ámbito

echo "Explicación de las operaciones en 2.c:\n";
echo "1. \$matrizC se inicializa con [5 => 1, 12 => 2].\n";
echo "2. \$matrizC[] = 56 asigna el valor 56 a la clave 13 (máximo índice previo + 1).\n";
echo "3. \$matrizC['x'] = 42 agrega la clave asociativa 'x'.\n";
echo "4. unset(\$matrizC[5]) remueve el elemento con clave 5.\n";
echo "5. unset(\$matrizC) libera la variable completa de la memoria. Si se intenta acceder a ella posteriormente, PHP genera un Notice/Warning de variable indefinida.\n";
echo "Salida en pantalla: Ninguna (el código solo realiza mutaciones y destrucción de memoria sin sentencias echo o print).\n";
?>
