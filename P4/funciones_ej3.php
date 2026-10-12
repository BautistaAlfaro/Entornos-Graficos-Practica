<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - PHP: Arrays y Funciones - Ejercicio 3
 * 
 * Consigna: En cada caso, indicar las salidas correspondientes.
 */

echo "=== Caso 3.a: Uso de getdate() ===\n";
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]\n\n";

echo "=== Caso 3.b: Función sumar() ===\n";
function sumar($sumando1, $sumando2) {
    $suma = $sumando1 + $sumando2;
    echo $sumando1 . "+" . $sumando2 . "=" . $suma . "\n";
}

echo "Llamada a sumar(5, 6):\n";
sumar(5, 6); // Salida: 5+6=11
?>
