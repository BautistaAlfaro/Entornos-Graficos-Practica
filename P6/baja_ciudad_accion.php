<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Procesar Baja de Ciudad
 */
include("conexion.php");

$id = intval($_POST['id']);

// Verificar si existe la ciudad antes de eliminarla
$vSqlCheck = "SELECT ciudad FROM ciudades WHERE id = $id";
$vResCheck = mysqli_query($link, $vSqlCheck) or die("Error al verificar ciudad: " . mysqli_error($link));

if (mysqli_num_rows($vResCheck) > 0) {
    $fila = mysqli_fetch_array($vResCheck);
    $nombreCiudad = $fila['ciudad'];

    $vSqlDelete = "DELETE FROM ciudades WHERE id = $id";
    mysqli_query($link, $vSqlDelete) or die("Error al eliminar ciudad: " . mysqli_error($link));
    $mensaje = "La ciudad '$nombreCiudad' (ID: $id) ha sido eliminada correctamente.";
    $exito = true;
} else {
    $mensaje = "No se encontró ninguna ciudad con el ID $id.";
    $exito = false;
}

mysqli_free_result($vResCheck);
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Baja - Práctica 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 50px 0; }</style>
</head>
<body>
    <div class="container text-center">
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
            <?php if ($exito) { ?>
                <div class="display-4 text-success mb-3">&check;</div>
                <h3 class="card-title text-success">Baja Exitosa</h3>
            <?php } else { ?>
                <div class="display-4 text-warning mb-3">&excl;</div>
                <h3 class="card-title text-warning">Registro no encontrado</h3>
            <?php } ?>
            <p class="text-muted"><?php echo htmlspecialchars($mensaje); ?></p>
            <div class="mt-4">
                <a href="baja_ciudad.php" class="btn btn-danger mr-2">Volver a Bajas</a>
                <a href="listado_ciudades.php" class="btn btn-primary mr-2">Ver Listado</a>
                <a href="index.php" class="btn btn-secondary">Menú Principal</a>
            </div>
        </div>
    </div>
</body>
</html>
