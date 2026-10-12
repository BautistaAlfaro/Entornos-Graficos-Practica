<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 5 - Destrucción de variables de sesión
 */
session_start();

// Destruir todas las variables de la sesión
$_SESSION = array();

// Si se desea destruir la cookie de sesión del navegador
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Finalmente, destruir la sesión
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesión Finalizada</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="card">
        <h2 style="color: #28a745;">Sesión cerrada correctamente</h2>
        <p>Se ha ejecutado <code>session_destroy()</code> y se limpió el array <code>$_SESSION</code>.</p>
        <p><a href="cuenta.php">&larr; Iniciar una nueva sesión en cuenta.php</a></p>
    </div>
</body>
</html>
