<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 2: Contador de visitas en el lado cliente con cookie
 * Archivo: contador.php
 */

if (!isset($_COOKIE['contador'])) {
    // Primera vez que accede a la página
    $visitas = 1;
    setcookie('contador', $visitas, time() + (3600 * 24 * 365)); // 1 año de duración
    $es_primera_vez = true;
} else {
    // Ya ha accedido anteriormente
    $visitas = intval($_COOKIE['contador']) + 1;
    setcookie('contador', $visitas, time() + (3600 * 24 * 365));
    $es_primera_vez = false;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2: Contador de Visitas con Cookie</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 500px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .counter-badge { font-size: 28px; font-weight: bold; color: #007bff; margin: 15px 0; }
        .welcome { color: #28a745; font-size: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Práctica 7 - Ejercicio 2</h2>
        <hr>
        <?php if ($es_primera_vez) { ?>
            <p class="welcome">¡Bienvenido a nuestro sitio por primera vez!</p>
            <p class="text-muted">Se ha creado una cookie en su navegador para recordar sus futuros accesos.</p>
        <?php } else { ?>
            <p>¡Qué bueno verte de nuevo!</p>
            <p>Número de veces que has accedido a esta página:</p>
            <div class="counter-badge"><?php echo $visitas; ?> accesos</div>
        <?php } ?>
        <hr>
        <p><a href="contador.php">Recargar página para incrementar contador &circlearrowright;</a></p>
    </div>
</body>
</html>
