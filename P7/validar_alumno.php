<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 6: Validación de Alumno y almacenamiento en sesión
 * Archivo: validar_alumno.php
 */
session_start();
include("conexion_base2.php");

$mail = trim($_POST['mail']);

// Consulta a la tabla alumnos de base2
$vSql = "SELECT * FROM alumnos WHERE mail = '$mail'";
$vRes = mysqli_query($link2, $vSql) or die("Error en la consulta: " . mysqli_error($link2));

if (mysqli_num_rows($vRes) > 0) {
    $fila = mysqli_fetch_array($vRes);
    // Rescatar su nombre y almacenarlo en la variable de sesión
    $_SESSION['nombre'] = $fila['nombre'];
    $encontrado = true;
    $nombreAlumno = $fila['nombre'];
} else {
    // Si no existe, nos aseguramos de no dejar la sesión abierta
    unset($_SESSION['nombre']);
    $encontrado = false;
}

mysqli_free_result($vRes);
mysqli_close($link2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de Alumno - Práctica 7</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; text-align: center; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .btn { display: inline-block; padding: 12px 24px; background: #28a745; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Resultado de Validación</h2>
        <?php if ($encontrado) { ?>
            <p style="color: #28a745; font-size: 18px; font-weight: bold;">¡Alumno identificado correctamente!</p>
            <p>Se ha guardado <code>$_SESSION['nombre'] = "<?php echo htmlspecialchars($nombreAlumno); ?>"</code>.</p>
            <hr>
            <p>Haga clic en el enlace reglamentario para acceder a la página restringida:</p>
            <a href="bienvenida.php" class="btn">Acceder a bienvenida.php &rarr;</a>
        <?php } else { ?>
            <p style="color: #dc3545; font-size: 18px; font-weight: bold;">Correo no registrado</p>
            <p>El correo <strong><?php echo htmlspecialchars($mail); ?></strong> no figura en la tabla alumnos.</p>
            <hr>
            <p><a href="consulta_alumno.php">&larr; Intentar con otro correo</a></p>
            <p><a href="bienvenida.php" style="color: #666; font-size: 13px;">(Probar acceder a bienvenida.php sin sesión para ver el bloqueo)</a></p>
        <?php } ?>
    </div>
</body>
</html>
