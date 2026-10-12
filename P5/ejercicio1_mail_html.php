<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 5 - Ejercicio 1: Envío de correo electrónico con formato HTML
 */

$destinatario = "usuario_destino@ejemplo.com";
$asunto = "Prueba de Envío de Correo HTML - UTN FRRO";

// Cuerpo del mensaje formateado en HTML según especificación de la cátedra
$cuerpo = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notificación Institucional</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; padding: 20px; color: #333; }
        .card { background-color: #ffffff; border-radius: 8px; padding: 25px; border-top: 5px solid #0056b3; }
        h1 { color: #0056b3; font-size: 22px; }
        p { font-size: 15px; line-height: 1.5; }
        .footer { font-size: 12px; color: #888; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>¡Estimado/a Estudiante!</h1>
        <p>Este es un correo de prueba enviado mediante la función <code>mail()</code> de PHP con <b>formato HTML</b> y cabeceras MIME.</p>
        <p>Permite renderizar texto enriquecido, colores, tipografía e imágenes en clientes de correo modernos.</p>
        <div class="footer">Cátedra de Entornos Gráficos - Universidad Tecnológica Nacional</div>
    </div>
</body>
</html>
';

// Cabeceras obligatorias para el envío de correo en formato HTML
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

// Cabeceras adicionales opcionales
$headers .= "From: Webmaster UTN <webmaster@frro.utn.edu.ar>\r\n";
$headers .= "Reply-To: consultas@frro.utn.edu.ar\r\n";
$headers .= "Cc: copia@ejemplo.com\r\n";
$headers .= "Bcc: copia_oculta@ejemplo.com\r\n";

// Envío del correo
if (@mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "<h3>El correo HTML ha sido despachado exitosamente hacia $destinatario.</h3>\n";
} else {
    echo "<h3>Nota: En entornos locales sin servidor SMTP configurado (sendmail/postfix), mail() retorna false.</h3>\n";
    echo "<p>Estructura de cabeceras generadas correctamente:</p>\n<pre>" . htmlspecialchars($headers) . "</pre>\n";
}
?>
