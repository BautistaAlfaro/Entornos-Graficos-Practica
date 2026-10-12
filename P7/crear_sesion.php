<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 5: Página 2 (Creación de las dos variables de sesión)
 * Archivo: crear_sesion.php
 */
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario']);
    $clave   = trim($_POST['clave']);

    // Creamos las dos variables de sesión solicitadas por la consigna
    $_SESSION['usuario'] = $usuario;
    $_SESSION['clave']   = $clave; // Almacenamos el valor para validar su recuperación en la página 3
    $creadas = true;
} else {
    $creadas = false;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2: Sesión Iniciada - Práctica 7</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .btn { display: inline-block; padding: 12px 24px; background: #28a745; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Página 2: Creación de Sesión</h2>
        <?php if ($creadas) { ?>
            <p style="color: #28a745; font-size: 18px; font-weight: bold;">&check; ¡Variables de sesión creadas exitosamente!</p>
            <p>Se registraron <code>$_SESSION['usuario']</code> y <code>$_SESSION['clave']</code> en el servidor.</p>
            <hr>
            <a href="ver_sesion.php" class="btn">Continuar a Página 3 (Recuperar Valores) &rarr;</a>
        <?php } else { ?>
            <p style="color: #dc3545;">No se recibieron credenciales.</p>
            <p><a href="login.php">&larr; Volver al formulario de login</a></p>
        <?php } ?>
    </div>
</body>
</html>
