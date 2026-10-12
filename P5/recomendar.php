<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado de Recomendación</title>
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
         * Práctica N° 5 - Ejercicio 3: Backend de recomendación a un amigo
         */

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tu_nombre    = htmlspecialchars(trim($_POST['tu_nombre']));
            $tu_email     = filter_var(trim($_POST['tu_email']), FILTER_SANITIZE_EMAIL);
            $amigo_nombre = htmlspecialchars(trim($_POST['amigo_nombre']));
            $amigo_email  = filter_var(trim($_POST['amigo_email']), FILTER_SANITIZE_EMAIL);
            $mensaje_pers = htmlspecialchars(trim($_POST['mensaje']));

            $asunto = "$tu_nombre te recomienda visitar este sitio web";
            
            $url_sitio = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/";

            $cuerpo = "Hola $amigo_nombre,\n\n"
                    . "$tu_nombre ($tu_email) visitó nuestro sitio web y pensó que te resultaría interesante.\n\n"
                    . "Mensaje de $tu_nombre:\n\"$mensaje_pers\"\n\n"
                    . "Podés visitarlo en el siguiente enlace:\n$url_sitio\n\n"
                    . "¡Saludos cordiales!";

            $headers = "From: $tu_nombre <$tu_email>\r\n"
                     . "Reply-To: $tu_email\r\n"
                     . "X-Mailer: PHP/" . phpversion();

            @mail($amigo_email, $asunto, $cuerpo, $headers);

            echo "<h3 style='color: #28a745;'>¡Gracias, $tu_nombre!</h3>";
            echo "<p>Se ha enviado una recomendación a <strong>$amigo_nombre</strong> ($amigo_email).</p>";
        } else {
            echo "<h3 style='color: #dc3545;'>Acceso no válido.</h3>";
        }
        ?>
        <p><a href="recomendar.html">&larr; Volver</a></p>
    </div>
</body>
</html>
