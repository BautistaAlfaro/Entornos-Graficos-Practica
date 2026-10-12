<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - Ejercicio 2 (PHP)
 * 
 * Consigna: Indicar si los siguientes códigos son equivalentes. Justificar.
 */

echo "=== Caso 2.a: Bucle while clásico vs sintaxis alternativa con endwhile ===\n";
echo "Código 1 (while tradicional con llaves):\n";
$i = 1;
while ($i <= 10) {
    print $i++;
}
echo "\n";

echo "Código 2 (sintaxis alternativa while: ... endwhile;):\n";
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
echo "\n";
echo "ANÁLISIS 2.a: SÍ son equivalentes funcionalmente. Ambos imprimen los números del 1 al 10.\n";
echo "En el primer caso se utiliza el post-incremento (\$i++) dentro del print, mientras que en el segundo se imprime y luego se incrementa en línea separada.\n\n";

echo "=== Caso 2.b: Variantes de bucle for y do-while ===\n";
echo "Variante 1 (for estándar):\n";
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
echo "\n";

echo "Variante 2 (for condensado en la 3ra expresión):\n";
for ($i = 1; $i <= 10; print $i, $i++) ;
echo "\n";

echo "Variante 3 (for sin condición, con break):\n";
for ($i = 1; ;$i++) {
    if ($i > 10) {
        break;
    }
    print $i;
}
echo "\n";

echo "Variante 4 (do..while con pre-incremento):\n";
$i = 0;
do {
    print ++$i;
} while ($i < 10);
echo "\n";

echo "Variante 5 (for infinito con condición y paso internos):\n";
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    print $i;
    $i++;
}
echo "\n";
echo "ANÁLISIS 2.b: Todas las variantes son equivalentes en su salida por pantalla (imprimen 12345678910).\n";
echo "Sin embargo, difieren en su estructura de control interna, inicialización y legibilidad.\n\n";

echo "=== Caso 2.c: if/elseif vs switch/case ===\n";
$i = 1;
echo "Evaluación con if-elseif para \$i = $i: ";
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
echo "\n";

echo "Evaluación con switch para \$i = $i: ";
switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}
echo "\n";
echo "ANÁLISIS 2.c: SÍ son funcionalmente equivalentes para los casos evaluados (0, 1, 2) gracias al uso correcto de 'break' en cada case del switch.\n";
?>
