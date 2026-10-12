<!-- Página que va a contener al contador de visitas -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página con Contador de Visitas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; text-align: center; }
        .counter-card { display: inline-block; padding: 25px 40px; border: 2px solid #007bff; border-radius: 8px; background: #eef6ff; }
    </style>
</head>
<body>
    <div class="counter-card">
        <h2>Bienvenido a nuestro sitio</h2>
        <p>Esta página registra cada acceso persistiendo el contador en un archivo de texto plano.</p>
        <hr>
        <?php include("contador.php"); ?>
    </div>
</body>
</html>
