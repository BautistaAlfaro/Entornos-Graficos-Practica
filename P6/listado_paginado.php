<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 6 - Listado Paginado de Ciudades
 * 
 * Implementación de paginación mediante la cláusula LIMIT de MySQL y cálculo dinámico de páginas
 */
include("conexion.php");

// 1. Configuración de registros por página
$tamano_pagina = 3;

// 2. Obtener página actual desde la URL (GET)
$pagina = isset($_GET["pagina"]) ? intval($_GET["pagina"]) : 1;
if ($pagina < 1) {
    $pagina = 1;
}

// 3. Contar el número total de registros en la tabla
$vSqlTotal = "SELECT * FROM ciudades";
$vResultadoTotal = mysqli_query($link, $vSqlTotal) or die("Error al contar registros: " . mysqli_error($link));
$num_total_registros = mysqli_num_rows($vResultadoTotal);
mysqli_free_result($vResultadoTotal);

// 4. Calcular el total de páginas necesarias
$total_paginas = ceil($num_total_registros / $tamano_pagina);
if ($pagina > $total_paginas && $total_paginas > 0) {
    $pagina = $total_paginas;
}

// 5. Calcular el desplazamiento (offset) inicial para LIMIT
$inicio = ($pagina - 1) * $tamano_pagina;

// 6. Consulta con cláusula LIMIT según el modelo del apunte teórico
$vSqlPaginado = "SELECT * FROM ciudades ORDER BY id ASC LIMIT $inicio, $tamano_pagina";
$vResultadoPaginado = mysqli_query($link, $vSqlPaginado) or die("Error al consultar página de ciudades: " . mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado Paginado de Ciudades - Práctica 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body { background: #f4f6f9; padding: 40px 0; }
        .table th, .table td { vertical-align: middle; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Listado Paginado de Ciudades (Página <?php echo $pagina; ?> de <?php echo $total_paginas; ?>)</h4>
                <div>
                    <a href="alta_ciudad.php" class="btn btn-sm btn-light font-weight-bold mr-2">&plus; Nueva Ciudad</a>
                    <a href="index.php" class="btn btn-sm btn-outline-light">&larr; Menú Principal</a>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="alert alert-info py-2 small mb-3">
                    Cláusula SQL ejecutada: <code>LIMIT <?php echo $inicio; ?>, <?php echo $tamano_pagina; ?></code> (Total de ciudades registradas: <?php echo $num_total_registros; ?>)
                </div>

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
                            while ($fila = mysqli_fetch_array($vResultadoPaginado)) { 
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

                <!-- Controles de Paginación -->
                <nav aria-label="Navegación de páginas" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <!-- Botón Anterior -->
                        <?php if ($pagina > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="listado_paginado.php?pagina=<?php echo ($pagina - 1); ?>" aria-label="Anterior">
                                    <span aria-hidden="true">&laquo; Anterior</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="page-item disabled">
                                <span class="page-link">&laquo; Anterior</span>
                            </li>
                        <?php } ?>

                        <!-- Números de Página -->
                        <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
                            <li class="page-item <?php if ($i == $pagina) echo 'active'; ?>">
                                <a class="page-link" href="listado_paginado.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php } ?>

                        <!-- Botón Siguiente -->
                        <?php if ($pagina < $total_paginas) { ?>
                            <li class="page-item">
                                <a class="page-link" href="listado_paginado.php?pagina=<?php echo ($pagina + 1); ?>" aria-label="Siguiente">
                                    <span aria-hidden="true">Siguiente &raquo;</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="page-item disabled">
                                <span class="page-link">Siguiente &raquo;</span>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
            <div class="card-footer bg-white text-center">
                <a href="listado_ciudades.php" class="btn btn-outline-info btn-sm">Ver todas las ciudades en una sola lista (Sin Paginación)</a>
            </div>
        </div>
    </div>
    <?php
    mysqli_free_result($vResultadoPaginado);
    mysqli_close($link);
    ?>
</body>
</html>
