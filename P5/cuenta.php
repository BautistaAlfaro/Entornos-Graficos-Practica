<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 5 - Ejercicio 4: Contador de páginas visitadas durante la sesión
 * Archivo: cuenta.php
 */
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Principal de Sesión - cuenta.php</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        a { display: inline-block; margin: 10px; color: #007bff; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Práctica 5 - Sesiones</h2>
        <p>Estás en <strong>cuenta.php</strong>.</p>
        <p>Se ha registrado un acceso a esta página en la sesión actual.</p>
        <hr>
        <p><a href="cant_visitas.php">Ir a cant_visitas.php &rarr;</a></p>
        <p><a href="cerrar_sesion.php" style="color: #dc3545;">Cerrar / Reiniciar Sesión</a></p>
    </div>
</body>
</html>
