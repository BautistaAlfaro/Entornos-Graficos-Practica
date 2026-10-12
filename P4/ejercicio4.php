<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - Ejercicio 4 (PHP)
 * 
 * Consigna: Indicar las salidas que produce el siguiente código. Justificar.
 */

// Antes del include, las variables $flor y $color no han sido definidas en este ámbito.
// En PHP emitirá advertencias de tipo E_WARNING (o E_NOTICE en versiones antiguas) de "Undefined variable".
// La salida imprimirá literalmente "El  \n" (con espacios vacíos donde debían ir las variables).
echo "--- Primera salida (antes de include) ---\n";
@$primer_salida = "El $flor $color \n";
echo $primer_salida;

// Se incluye el archivo datos.php, el cual define $color = 'blanco'; y $flor = 'clavel';
include 'datos.php';

// Ahora las variables están disponibles en el ámbito global del script actual.
// Por ende, la segunda salida imprime: " El clavel blanco"
echo "\n--- Segunda salida (después de include) ---\n";
echo " El $flor $color\n";

echo "\nJustificación teórica:\n";
echo "1. Antes del include, las variables \$flor y \$color no existen en la tabla de símbolos del script.\n";
echo "2. La directiva include 'datos.php' ejecuta e incorpora el código del archivo externo en el punto exacto de la llamada.\n";
echo "3. Por ende, a partir de esa línea las variables adquieren los valores asignados ('clavel' y 'blanco') y se interpolan correctamente en la cadena.\n";
?>
