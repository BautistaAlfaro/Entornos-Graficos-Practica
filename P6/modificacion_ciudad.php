<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Modificación de Ciudad
 */
include("conexion.php");

$id_editar = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
$ciudad_actual = null;

if ($id_editar > 0) {
    $vSqlEdit = "SELECT * FROM ciudades WHERE id = $id_editar";
    $vResEdit = mysqli_query($link, $vSqlEdit) or die("Error al consultar ciudad: " . mysqli_error($link));
    if (mysqli_num_rows($vResEdit) > 0) {
        $ciudad_actual = mysqli_fetch_array($vResEdit);
    }
    mysqli_free_result($vResEdit);
}

// Obtener todas las ciudades para el selector
$vSqlAll = "SELECT id, ciudad, pais FROM ciudades ORDER BY id ASC";
$vResAll = mysqli_query($link, $vSqlAll) or die("Error al listar ciudades: " . mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificación de Ciudad - Práctica 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 40px 0; }</style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <!-- Selector de Ciudad a Editar -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Modificación de Ciudad</h4>
                        <a href="index.php" class="btn btn-sm btn-outline-light">&larr; Menú Principal</a>
                    </div>
                    <div class="card-body p-4">
                        <form action="modificacion_ciudad.php" method="get" class="form-inline justify-content-center">
                            <label for="id" class="mr-2 font-weight-bold">Seleccionar Ciudad:</label>
                            <select name="id" id="id" class="form-control mr-2" required>
                                <option value="">-- Elija una ciudad --</option>
                                <?php while ($c = mysqli_fetch_array($vResAll)) { ?>
                                    <option value="<?php echo $c['id']; ?>" <?php if ($c['id'] == $id_editar) echo "selected"; ?>>
                                        #<?php echo $c['id']; ?> - <?php echo htmlspecialchars($c['ciudad']); ?> (<?php echo htmlspecialchars($c['pais']); ?>)
                                    </option>
                                <?php } ?>
                            </select>
                            <button type="submit" class="btn btn-warning text-white">Cargar Datos</button>
                        </form>
                    </div>
                </div>

                <!-- Formulario con Datos Precargados -->
                <?php if ($ciudad_actual) { ?>
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-bottom">
                            <h5 class="mb-0 text-primary">Editando: <strong><?php echo htmlspecialchars($ciudad_actual['ciudad']); ?></strong> (ID: <?php echo $ciudad_actual['id']; ?>)</h5>
                        </div>
                        <div class="card-body p-4">
                            <form action="modificacion_ciudad_accion.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $ciudad_actual['id']; ?>">

                                <div class="form-group">
                                    <label for="ciudad"><strong>Nombre de la Ciudad:</strong></label>
                                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo htmlspecialchars($ciudad_actual['ciudad']); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="pais"><strong>País:</strong></label>
                                    <input type="text" class="form-control" id="pais" name="pais" value="<?php echo htmlspecialchars($ciudad_actual['pais']); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="habitantes"><strong>Cantidad de Habitantes:</strong></label>
                                    <input type="number" class="form-control" id="habitantes" name="habitantes" value="<?php echo $ciudad_actual['habitantes']; ?>" min="1" required>
                                </div>

                                <div class="form-group">
                                    <label for="superficie"><strong>Superficie (km²):</strong></label>
                                    <input type="number" step="0.01" class="form-control" id="superficie" name="superficie" value="<?php echo $ciudad_actual['superficie']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label><strong>¿Tiene red de Metro / Subte?</strong></label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="metro1" name="tieneMetro" value="1" class="custom-control-input" <?php if ($ciudad_actual['tieneMetro'] == 1) echo "checked"; ?>>
                                        <label class="custom-control-label" for="metro1">Sí tiene Metro</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="metro0" name="tieneMetro" value="0" class="custom-control-input" <?php if ($ciudad_actual['tieneMetro'] == 0) echo "checked"; ?>>
                                        <label class="custom-control-label" for="metro0">No tiene Metro</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-warning text-white btn-block mt-4 font-weight-bold">Guardar Modificaciones</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
    mysqli_free_result($vResAll);
    mysqli_close($link);
    ?>
</body>
</html>
