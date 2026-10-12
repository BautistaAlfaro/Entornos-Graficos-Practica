<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 5: Página 3 (Recuperación y visualización de variables de sesión)
 * Archivo: ver_sesion.php
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 3: Valores Recuperados de Sesión</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 480px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .data-box { background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 6px; padding: 15px; margin: 20px 0; text-align: left; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Página 3: Recuperación de Sesión</h2>
        <p class="text-muted">Se leen los datos persistidos en el superglobal <code>$_SESSION</code> creados en la página anterior.</p>
        <hr>

        <?php if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) { ?>
            <div class="data-box">
                <p><strong>Usuario recuperado:</strong> <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
                <p><strong>Clave recuperada:</strong> <?php echo htmlspecialchars($_SESSION['clave']); ?></p>
            </div>
            <p style="color: #28a745; font-weight: bold;">¡Las variables de sesión se conservaron correctamente entre las distintas páginas!</p>
        <?php } else { ?>
            <p style="color: #dc3545; font-weight: bold;">No se encontraron variables de sesión activas.</p>
            <p>Es posible que no haya pasado por la página 1 o que la sesión haya expirado.</p>
        <?php } ?>

        <hr>
        <p><a href="login.php">&larr; Volver al Login (Página 1)</a></p>
    </div>
</body>
</html>
