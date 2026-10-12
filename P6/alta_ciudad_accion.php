<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Procesar Alta de Ciudad
 */
include("conexion.php");

$ciudad     = trim($_POST['ciudad']);
$pais       = trim($_POST['pais']);
$habitantes = intval($_POST['habitantes']);
$superficie = floatval($_POST['superficie']);
$tieneMetro = intval($_POST['tieneMetro']);

// Consulta SQL INSERT con control de errores según patrón de la cátedra
$vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) 
         VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)";

mysqli_query($link, $vSql) or die("Error al insertar la ciudad: " . mysqli_error($link));

mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Exitosa - Práctica 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 50px 0; }</style>
</head>
<body>
    <div class="container text-center">
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
            <div class="display-4 text-success mb-3">&check;</div>
            <h3 class="card-title text-success">¡Ciudad Registrada con Éxito!</h3>
            <p class="text-muted">Se ha insertado la ciudad <strong><?php echo htmlspecialchars($ciudad); ?></strong> en la base de datos Capitales.</p>
            <div class="mt-4">
                <a href="alta_ciudad.php" class="btn btn-outline-success mr-2">Agregar Otra</a>
                <a href="listado_ciudades.php" class="btn btn-primary mr-2">Ver Listado</a>
                <a href="index.php" class="btn btn-secondary">Menú Principal</a>
            </div>
        </div>
    </div>
</body>
</html>
