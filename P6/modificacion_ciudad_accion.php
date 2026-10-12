<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Procesar Modificación de Ciudad
 */
include("conexion.php");

$id         = intval($_POST['id']);
$ciudad     = trim($_POST['ciudad']);
$pais       = trim($_POST['pais']);
$habitantes = intval($_POST['habitantes']);
$superficie = floatval($_POST['superficie']);
$tieneMetro = intval($_POST['tieneMetro']);

$vSqlUpdate = "UPDATE ciudades SET 
                ciudad = '$ciudad',
                pais = '$pais',
                habitantes = $habitantes,
                superficie = $superficie,
                tieneMetro = $tieneMetro
               WHERE id = $id";

mysqli_query($link, $vSqlUpdate) or die("Error al actualizar la ciudad: " . mysqli_error($link));

mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificación Exitosa - Práctica 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 50px 0; }</style>
</head>
<body>
    <div class="container text-center">
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
            <div class="display-4 text-warning mb-3">&#10004;</div>
            <h3 class="card-title text-warning">¡Ciudad Actualizada!</h3>
            <p class="text-muted">Los datos de <strong><?php echo htmlspecialchars($ciudad); ?></strong> (ID: <?php echo $id; ?>) han sido guardados satisfactoriamente.</p>
            <div class="mt-4">
                <a href="modificacion_ciudad.php" class="btn btn-outline-warning mr-2">Modificar Otra</a>
                <a href="listado_ciudades.php" class="btn btn-primary mr-2">Ver Listado</a>
                <a href="index.php" class="btn btn-secondary">Menú Principal</a>
            </div>
        </div>
    </div>
</body>
</html>
