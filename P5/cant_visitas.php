<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 5 - Ejercicio 4: Visualización del contador de páginas en sesión
 * Archivo: cant_visitas.php
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cantidad de Visitas - cant_visitas.php</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .badge { font-size: 24px; color: #28a745; font-weight: bold; }
        a { display: inline-block; margin: 10px; color: #007bff; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Reporte de Sesión</h2>
        <p class="badge">
            <?php
            $visitas = isset($_SESSION["contador"]) ? $_SESSION["contador"] : 0;
            echo "Has visitado " . $visitas . " páginas";
            ?>
        </p>
        <p class="text-muted">El dato persiste a lo largo de la navegación del usuario gracias a las variables de sesión del servidor.</p>
        <hr>
        <p><a href="cuenta.php">&larr; Volver a cuenta.php (incrementar contador)</a></p>
        <p><a href="cerrar_sesion.php" style="color: #dc3545;">Cerrar / Reiniciar Sesión</a></p>
    </div>
</body>
</html>
