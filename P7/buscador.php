<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 8: Buscador de Canciones
 * Archivo: buscador.php
 */
include("conexion_prueba.php");

$termino = isset($_GET['buscar']) ? trim($_GET['buscar']) : '';
$resultados = array();
$busqueda_realizada = false;

if ($termino !== '') {
    // Escapar cadena para prevenir inyección SQL
    $termino_seguro = mysqli_real_escape_string($link_prueba, $termino);
    // Búsqueda por coincidencia parcial utilizando el operador LIKE
    $vSql = "SELECT canciones FROM buscador WHERE canciones LIKE '%$termino_seguro%' ORDER BY canciones ASC";
    $vRes = mysqli_query($link_prueba, $vSql) or die("Error en la búsqueda: " . mysqli_error($link_prueba));

    while ($row = mysqli_fetch_array($vRes)) {
        $resultados[] = $row['canciones'];
    }
    mysqli_free_result($vRes);
    $busqueda_realizada = true;
} else if (isset($_GET['buscar'])) {
    // Si envió el formulario en blanco, listar todas
    $vSql = "SELECT canciones FROM buscador ORDER BY canciones ASC";
    $vRes = mysqli_query($link_prueba, $vSql) or die("Error en la consulta: " . mysqli_error($link_prueba));
    while ($row = mysqli_fetch_array($vRes)) {
        $resultados[] = $row['canciones'];
    }
    mysqli_free_result($vRes);
    $busqueda_realizada = true;
}

mysqli_close($link_prueba);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de Canciones - Práctica 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 40px 0; }</style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-dark text-white text-center py-3">
                        <h3 class="mb-0">&#127925; Buscador de Canciones</h3>
                        <small>Práctica 7 - Ejercicio 8 (Base de Datos: <strong>prueba</strong> | Tabla: <strong>buscador</strong>)</small>
                    </div>
                    <div class="card-body p-4">
                        <form action="buscador.php" method="get">
                            <div class="input-group input-group-lg mb-3">
                                <input type="text" class="form-control" name="buscar" value="<?php echo htmlspecialchars($termino); ?>" placeholder="Buscar por título o artista (ej: Soda, Charly, Amor)..." autofocus>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">&#128269; Buscar</button>
                                </div>
                            </div>
                            <small class="text-muted">Deje el campo vacío y presione "Buscar" para listar el catálogo completo de canciones.</small>
                        </form>
                    </div>
                </div>

                <!-- Resultados de la búsqueda -->
                <?php if ($busqueda_realizada) { ?>
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-primary">Resultados encontrados: <strong><?php echo count($resultados); ?></strong></h5>
                            <?php if ($termino !== '') { ?>
                                <span class="badge badge-info">Filtro: "<?php echo htmlspecialchars($termino); ?>"</span>
                            <?php } ?>
                        </div>
                        <div class="card-body p-0">
                            <?php if (!empty($resultados)) { ?>
                                <ul class="list-group list-group-flush">
                                    <?php foreach ($resultados as $cancion) { ?>
                                        <li class="list-group-item d-flex align-items-center">
                                            <span class="mr-3 text-secondary">&#9834;</span>
                                            <span><?php echo htmlspecialchars($cancion); ?></span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } else { ?>
                                <div class="p-4 text-center text-muted">
                                    <p class="mb-0">No se encontraron canciones que coincidan con "<strong><?php echo htmlspecialchars($termino); ?></strong>".</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
