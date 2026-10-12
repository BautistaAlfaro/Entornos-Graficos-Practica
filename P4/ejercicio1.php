<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - Ejercicio 1 (PHP)
 * 
 * Consigna:
 * Identificar:
 * 1. Variables y su tipo
 * 2. Operadores
 * 3. Funciones y sus parámetros
 * 4. Estructuras de control
 * 5. Salida por pantalla y justificación paso a paso
 */

function doble($i) {
    return $i * 2;
}

$a = TRUE;        // boolean (true)
$b = "xyz";       // string ("xyz")
$c = 'xyz';       // string ('xyz')
$d = 12;          // integer (12)

echo "--- Salida inicial de tipos con gettype() ---\n";
echo gettype($a) . "\n"; // boolean
echo gettype($b) . "\n"; // string
echo gettype($c) . "\n"; // string
echo gettype($d) . "\n"; // integer

// 1. is_int($d): Como $d es entero (12), la condición es TRUE.
// Operador de asignación compuesta += : $d pasa a valer 16.
if (is_int($d)) {
    $d += 4;
}

// 2. is_string($a): $a es boolean, por lo tanto evalúa a FALSE. No imprime nada.
if (is_string($a)) {
    echo "Cadena: $a\n";
}

// 3. Operador ternario: $a ? ++$d : $d*3;
// Como $a es TRUE, se evalúa ++$d (pre-incremento).
// $d se incrementa primero a 17 y ese valor se asigna a $d.
$d = $a ? ++$d : $d * 3;

// 4. Invocación de función con post-incremento: doble($d++);
// $d++ es un post-incremento: pasa el valor actual (17) como parámetro $i a la función doble(),
// y luego $d se incrementa a 18.
// Dentro de doble(17): retorna 17 * 2 = 34.
// Por ende, $f = 34 y $d = 18.
$f = doble($d++);

// 5. Asignación compuesta encadenada: $g = $f += 10;
// $f += 10 suma 10 a $f ($f pasa a ser 44), y ese valor se asigna a $g ($g = 44).
$g = $f += 10;

echo "\n--- Salida final de variables ---\n";
// echo $a, $b, $c, $d, $f, $g;
// $a se castea a string como "1"
// $b = "xyz"
// $c = "xyz"
// $d = 18
// $f = 44
// $g = 44
echo "Valores: " . $a . $b . $c . $d . $f . $g . "\n";
echo "\nExplicación detallada:\n";
echo "\$a = $a (en PHP boolean true se imprime como '1')\n";
echo "\$b = $b\n";
echo "\$c = $c\n";
echo "\$d = $d\n";
echo "\$f = $f\n";
echo "\$g = $g\n";
echo "Salida cruda esperada: 1xyzxyz184444\n";
?>
