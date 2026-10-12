<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Listado Completo de Ciudades (Sin Paginación)
 */
include("conexion.php");

$vSql = "SELECT * FROM ciudades ORDER BY id ASC";
$vResultado = mysqli_query($link, $vSql) or die("Error al consultar ciudades: " . mysqli_error($link));
$totalRegistros = mysqli_num_rows($vResultado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Ciudades - Base de Datos Capitales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body { background: #f4f6f9; padding: 40px 0; }
        .table th, .table td { vertical-align: middle; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Listado General de Ciudades (Total: <?php echo $totalRegistros; ?>)</h4>
                <div>
                    <a href="alta_ciudad.php" class="btn btn-sm btn-light font-weight-bold mr-2">&plus; Nueva Ciudad</a>
                    <a href="index.php" class="btn btn-sm btn-outline-light">&larr; Menú Principal</a>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Ciudad</th>
                                <th>País</th>
                                <th>Habitantes</th>
                                <th>Superficie (km²)</th>
                                <th>¿Tiene Metro?</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            // Recorrido de los resultados usando mysqli_fetch_array según el apunte
                            while ($fila = mysqli_fetch_array($vResultado)) { 
                            ?>
                                <tr>
                                    <td><strong><?php echo $fila['id']; ?></strong></td>
                                    <td class="text-left"><?php echo htmlspecialchars($fila['ciudad']); ?></td>
                                    <td><?php echo htmlspecialchars($fila['pais']); ?></td>
                                    <td><?php echo number_format($fila['habitantes'], 0, ',', '.'); ?></td>
                                    <td><?php echo number_format($fila['superficie'], 2, ',', '.'); ?></td>
                                    <td>
                                        <?php if ($fila['tieneMetro'] == 1) { ?>
                                            <span class="badge badge-success px-2 py-1">SÍ</span>
                                        <?php } else { ?>
                                            <span class="badge badge-secondary px-2 py-1">NO</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="modificacion_ciudad.php?id=<?php echo $fila['id']; ?>" class="btn btn-sm btn-warning text-white mr-1">&#9998; Editar</a>
                                        <form action="baja_ciudad_accion.php" method="post" style="display:inline;" onsubmit="return confirm('¿Eliminar <?php echo htmlspecialchars($fila['ciudad']); ?>?');">
                                            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-danger">&times; Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php 
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                <span class="text-muted">Mostrando todos los registros sin paginación.</span>
                <a href="listado_paginado.php" class="btn btn-primary btn-sm">Ver Versión Paginada &rarr;</a>
            </div>
        </div>
    </div>
    <?php
    // Liberar memoria del conjunto de resultados y cerrar enlace
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>
