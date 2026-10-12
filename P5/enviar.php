<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado de Envío de Consulta</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .result-card { max-width: 500px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="result-card">
        <?php
        /**
         * UTN FRRO - Entornos Gráficos
         * Práctica N° 5 - Ejercicio 2: Procesamiento y envío de consulta al webmaster
         */

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha = date("d-m-Y");
            $hora  = date("H:i:s");
            
            // Destinatario oficial (webmaster) indicado en el apunte de cátedra
            $destino = "webmaster@frro.utn.edu.ar";
            $asunto  = "Comentario / Consulta de Visitante";

            $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
            $email  = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
            $texto  = isset($_POST['texto']) ? htmlspecialchars(trim($_POST['texto'])) : '';

            $desde = 'From: ' . $email;

            $comentario = "
Nombre: $nombre
Email: $email
Consulta: $texto
Enviado: $fecha a las $hora
";

            // Se intenta el despacho mediante mail()
            @mail($destino, $asunto, $comentario, $desde);

            echo "<h3 style='color: #28a745;'>Su consulta ha sido enviada, en breve recibirá nuestra respuesta.</h3>";
            echo "<p><strong>Resumen del mensaje procesado:</strong></p>";
            echo "<pre style='text-align: left; background: #f8f9fa; padding: 15px; border-radius: 4px;'>" . htmlspecialchars($comentario) . "</pre>";
        } else {
            echo "<h3 style='color: #dc3545;'>Acceso no válido. Debe enviar el formulario.</h3>";
        }
        ?>
        <p><a href="Formulario.html">&larr; Volver al formulario de contacto</a></p>
    </div>
</body>
</html>
