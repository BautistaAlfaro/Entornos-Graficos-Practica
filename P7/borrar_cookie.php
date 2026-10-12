<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 4: Eliminación de la Cookie del Periódico
 * Archivo: borrar_cookie.php
 */

// Se expira la cookie estableciendo un timestamp pasado
setcookie("noticia_tipo", "", time() - 3600);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cookie Eliminada - Periódico</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="card">
        <h3 style="color: #28a745;">Cookie eliminada con éxito</h3>
        <p>Se ha restablecido la configuración original del periódico.</p>
        <p><a href="periodico.php">&larr; Volver a la portada del periódico (mostrará todos los titulares)</a></p>
    </div>
</body>
</html>
