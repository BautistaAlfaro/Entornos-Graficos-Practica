<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Baja de Ciudad
 */
include("conexion.php");

$vSql = "SELECT * FROM ciudades ORDER BY id ASC";
$vResultado = mysqli_query($link, $vSql) or die("Error al consultar ciudades: " . mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Baja de Ciudad - Práctica 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 40px 0; }</style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Baja de Ciudad</h4>
                        <a href="index.php" class="btn btn-sm btn-outline-light">&larr; Menú Principal</a>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-muted">Seleccione la ciudad que desea eliminar permanentemente de la base de datos:</p>
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered text-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Ciudad</th>
                                        <th>País</th>
                                        <th>Habitantes</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($fila = mysqli_fetch_array($vResultado)) { ?>
                                        <tr>
                                            <td><?php echo $fila['id']; ?></td>
                                            <td><strong><?php echo htmlspecialchars($fila['ciudad']); ?></strong></td>
                                            <td><?php echo htmlspecialchars($fila['pais']); ?></td>
                                            <td><?php echo number_format($fila['habitantes'], 0, ',', '.'); ?></td>
                                            <td>
                                                <form action="baja_ciudad_accion.php" method="post" onsubmit="return confirm('¿Está seguro de eliminar esta ciudad?');" style="display:inline;">
                                                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <hr class="my-4">
                        <h5>O eliminar ingresando directamente el ID:</h5>
                        <form action="baja_ciudad_accion.php" method="post" class="form-inline mt-3" onsubmit="return confirm('¿Confirmar eliminación por ID?');">
                            <div class="form-group mr-2">
                                <label for="id_manual" class="sr-only">ID Ciudad</label>
                                <input type="number" class="form-control" id="id_manual" name="id" placeholder="ID de la ciudad" min="1" required>
                            </div>
                            <button type="submit" class="btn btn-danger">Eliminar por ID</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>
