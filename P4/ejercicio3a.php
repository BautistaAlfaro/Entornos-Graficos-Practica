<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3.a - Tabla Dinámica PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; margin-top: 15px; }
        td { padding: 12px; text-align: center; }
    </style>
</head>
<body>
    <h2>Ejercicio 3.a: Generador de Tablas en PHP</h2>
    <p>Este script se utiliza para generar dinámicamente la estructura de una tabla HTML utilizando bucles <code>for</code> anidados (5 filas por 2 columnas).</p>

    <?php
    echo "<table width='90%' border='1'>";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col; $c++) {
            echo "<td>Fila $r, Columna $c</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>
</html>
