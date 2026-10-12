<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 6: Tercera página de bienvenida o restricción de acceso
 * Archivo: bienvenida.php
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Bienvenida - Práctica 7</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 500px; margin: 0 auto; background: white; padding: 35px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .welcome-title { color: #28a745; }
        .denied-title { color: #dc3545; }
    </style>
</head>
<body>
    <div class="card">
        <?php
        // Verificación estricta de la variable de sesión según consigna del enunciado
        if (isset($_SESSION['nombre'])) {
            echo "<h2 class='welcome-title'>¡Bienvenido/a al Sistema!</h2>";
            echo "<p style='font-size: 18px;'>Hola, <strong>" . htmlspecialchars($_SESSION['nombre']) . "</strong>.</p>";
            echo "<p class='text-muted'>Has ingresado correctamente a la sección protegida para alumnos registrados.</p>";
            echo "<hr>";
            echo "<p><a href='consulta_alumno.php'>Consultar otro alumno</a> | <a href='cerrar_sesion_alumno.php' style='color: #dc3545;'>Cerrar Sesión</a></p>";
        } else {
            echo "<h2 class='denied-title'>Acceso Denegado</h2>";
            echo "<p style='color: #721c24; background: #f8d7da; padding: 15px; border-radius: 4px; border: 1px solid #f5c6cb;'>";
            echo "Usted no puede visitar esta página. No se ha autenticado mediante un correo de alumno válido.";
            echo "</p>";
            echo "<hr>";
            echo "<p><a href='consulta_alumno.php'>&larr; Ir al formulario de ingreso para identificarse</a></p>";
        }
        ?>
    </div>
</body>
</html>
