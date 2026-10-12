<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 4 - Ejercicio 5: Contador de visitas a una página web
 */

// Archivo para acumular el número de visitas
$archivo = __DIR__ . "/contador.dat";

// Si el archivo no existe, crearlo con 0
if (!file_exists($archivo)) {
    file_put_contents($archivo, "0");
}

// Abrir el archivo para lectura
$abrir = fopen($archivo, "r");

// Leer el contenido del archivo si no está vacío
$tamano = filesize($archivo);
$cont = ($tamano > 0) ? fread($abrir, $tamano) : 0;

// Cerrar el archivo
fclose($abrir);

// Abrir nuevamente el archivo para escritura ("w" sobreescribe)
$abrir = fopen($archivo, "w");

// Agregar 1 visita
$cont = intval($cont) + 1;

// Guardar la modificación
$guardar = fwrite($abrir, $cont);

// Cerrar el archivo
fclose($abrir);

// Mostrar el total de visitas (se mantiene la etiqueta font por fidelidad al apunte)
echo "<font face='arial' size='3'>Cantidad de visitas: " . $cont . "</font>";
?>
