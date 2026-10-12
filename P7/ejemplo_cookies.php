<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 1: Selección y persistencia de estilos CSS con cookies
 * Archivo: ejemplo_cookies.php
 */

// 1. Verificar si recibo datos del formulario
if (isset($_POST["estilo"])) {
    // Estoy recibiendo un estilo nuevo, lo guardo en una cookie (duración: 90 días)
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
} else {
    // Si no he recibido estilo por POST, verifico si existe una cookie previa
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    } else {
        $estilo = "verde"; // Estilo predeterminado
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1: Cookies y Estilos CSS en PHP</title>
    <?php
    // Si hay un estilo definido, cargo la correspondiente hoja de estilos
    if (isset($estilo)) {
        echo '<link rel="stylesheet" type="text/css" href="' . htmlspecialchars($estilo) . '.css">';
    }
    ?>
</head>
<body>
    <div class="card-estilo">
        <h2>Práctica 7 - Ejercicio 1: Uso de Cookies</h2>
        <p>Ejemplo de uso de cookies en PHP para almacenar la hoja de estilos CSS que define el aspecto preferido de la página.</p>
        <p>El aspecto seleccionado se recordará entre las distintas visitas del usuario.</p>
        <hr>
        <form action="ejemplo_cookies.php" method="post">
            <label for="estilo"><strong>Aquí puedes seleccionar el estilo que prefieres en la página:</strong></label>
            <br>
            <select name="estilo" id="estilo">
                <option value="verde" <?php if ($estilo === 'verde') echo 'selected'; ?>>Verde</option>
                <option value="rosa" <?php if ($estilo === 'rosa') echo 'selected'; ?>>Rosa</option>
                <option value="negro" <?php if ($estilo === 'negro') echo 'selected'; ?>>Negro</option>
            </select>
            <br>
            <input type="submit" value="Actualizar el estilo">
        </form>
    </div>
</body>
</html>
