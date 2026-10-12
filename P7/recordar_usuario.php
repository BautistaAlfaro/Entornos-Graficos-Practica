<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 3: Recordar último usuario ingresado con Cookie
 * Archivo: recordar_usuario.php
 */

$mensaje = "";

// Si se envió el formulario, guardamos la cookie
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_usuario'])) {
    $nombre_ingresado = trim($_POST['nombre_usuario']);
    if (!empty($nombre_ingresado)) {
        setcookie("usuario_guardado", $nombre_ingresado, time() + (3600 * 24 * 30)); // 30 días
        $ultimo_usuario = $nombre_ingresado;
        $mensaje = "Usuario '$nombre_ingresado' guardado en cookie correctamente.";
    }
} else {
    // Si no es un POST, verificamos si existe la cookie previa para precargar
    $ultimo_usuario = isset($_COOKIE["usuario_guardado"]) ? $_COOKIE["usuario_guardado"] : "";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3: Recordar Usuario con Cookie</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { margin-top: 20px; width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
        input[type="submit"]:hover { background: #0056b3; }
        .alert-info { background: #d1ecf1; color: #0c5460; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Ingreso de Usuario</h2>
        <p class="text-muted">Práctica 7 - Ejercicio 3: Al guardar, el formulario recordará este usuario mediante una cookie para los próximos ingresos.</p>

        <?php if (!empty($mensaje)) { ?>
            <div class="alert-info"><?php echo htmlspecialchars($mensaje); ?></div>
        <?php } ?>

        <form action="recordar_usuario.php" method="post">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" value="<?php echo htmlspecialchars($ultimo_usuario); ?>" placeholder="Ingrese su nombre de usuario" required>

            <input type="submit" value="Guardar Usuario">
        </form>

        <?php if (!empty($ultimo_usuario)) { ?>
            <p style="margin-top: 20px; font-size: 13px; color: #666;">
                <em>Último usuario detectado en cookie: <strong><?php echo htmlspecialchars($ultimo_usuario); ?></strong></em>
            </p>
        <?php } ?>
    </div>
</body>
</html>
