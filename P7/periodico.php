<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 4: Periódico digital con preferencias en cookies
 * Archivo: periodico.php
 */

// Si recibimos la preferencia por formulario (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categoria'])) {
    $categoria = $_POST['categoria'];
    setcookie("noticia_tipo", $categoria, time() + (3600 * 24 * 30)); // 30 días
} else {
    // Si no viene por POST, verificamos si existe la cookie
    if (isset($_COOKIE["noticia_tipo"])) {
        $categoria = $_COOKIE["noticia_tipo"];
    } else {
        $categoria = "todas"; // La primera vez se muestran los 3 titulares
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El Diario Digital - Práctica 7</title>
    <style>
        body { font-family: 'Georgia', serif; background: #fafafa; margin: 30px; color: #222; }
        .newspaper { max-width: 800px; margin: 0 auto; background: white; padding: 40px; border: 1px solid #ddd; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .header { text-align: center; border-bottom: 3px double #333; padding-bottom: 15px; margin-bottom: 25px; }
        .header h1 { font-size: 38px; margin: 0; text-transform: uppercase; letter-spacing: 2px; }
        .news-item { padding: 20px 0; border-bottom: 1px solid #eee; }
        .news-badge { display: inline-block; padding: 4px 8px; font-size: 11px; text-transform: uppercase; font-weight: bold; color: white; border-radius: 3px; font-family: sans-serif; }
        .badge-politica { background: #007bff; }
        .badge-economia { background: #28a745; }
        .badge-deportes { background: #dc3545; }
        .pref-box { background: #f8f9fa; border: 1px solid #e9ecef; padding: 20px; border-radius: 6px; margin-bottom: 30px; font-family: sans-serif; }
        .btn-pref { background: #333; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="newspaper">
        <div class="header">
            <h1>La Voz de la Tecnología</h1>
            <p style="margin: 5px 0; font-style: italic;">Edición Especial - Entornos Gráficos UTN FRRO</p>
        </div>

        <!-- Panel de Configuración de Preferencias con Radio Buttons -->
        <div class="pref-box">
            <h4 style="margin-top: 0;">Configurar Titular Preferido:</h4>
            <form action="periodico.php" method="post">
                <label style="margin-right: 15px;">
                    <input type="radio" name="categoria" value="politica" <?php if ($categoria === 'politica') echo 'checked'; ?>> Noticia Política
                </label>
                <label style="margin-right: 15px;">
                    <input type="radio" name="categoria" value="economia" <?php if ($categoria === 'economia') echo 'checked'; ?>> Noticia Económica
                </label>
                <label style="margin-right: 15px;">
                    <input type="radio" name="categoria" value="deportes" <?php if ($categoria === 'deportes') echo 'checked'; ?>> Noticia Deportiva
                </label>
                <label style="margin-right: 15px;">
                    <input type="radio" name="categoria" value="todas" <?php if ($categoria === 'todas') echo 'checked'; ?>> Ver Todas
                </label>
                <br><br>
                <input type="submit" value="Guardar Preferencia en Cookie" class="btn-pref">
                <a href="borrar_cookie.php" style="margin-left: 20px; color: #dc3545; text-decoration: none;">&times; Borrar Cookie y Restaurar Todo</a>
            </form>
        </div>

        <!-- Despliegue de Titulares según Cookie -->
        <div class="news-container">
            <?php if ($categoria === 'politica' || $categoria === 'todas') { ?>
                <div class="news-item">
                    <span class="news-badge badge-politica">Política</span>
                    <h2 style="margin: 10px 0;">Nueva Ley de Fomento a la Industria del Software en Argentina</h2>
                    <p>El congreso aprobó por amplia mayoría nuevas partidas presupuestarias orientadas a la formación de profesionales técnicos y becas universitarias en tecnologías de la información.</p>
                </div>
            <?php } ?>

            <?php if ($categoria === 'economia' || $categoria === 'todas') { ?>
                <div class="news-item">
                    <span class="news-badge badge-economia">Economía</span>
                    <h2 style="margin: 10px 0;">El Sector Tecnológico lidera las exportaciones de servicios del país</h2>
                    <p>Las exportaciones de software y servicios basados en el conocimiento alcanzaron un récord histórico en el último trimestre impulsadas por el talento regional.</p>
                </div>
            <?php } ?>

            <?php if ($categoria === 'deportes' || $categoria === 'todas') { ?>
                <div class="news-item">
                    <span class="news-badge badge-deportes">Deportes</span>
                    <h2 style="margin: 10px 0;">La Selección Nacional se prepara con análisis de datos biométricos de última generación</h2>
                    <p>El cuerpo técnico incorporó inteligencia artificial y sensores IoT para optimizar el rendimiento y prevenir lesiones de los atletas en competencias internacionales.</p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
