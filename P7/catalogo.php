<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 7: Catálogo de Productos para Carrito de Compras
 * Archivo: catalogo.php
 */
session_start();
include("conexion_compras.php");

$vSql = "SELECT * FROM catalogo ORDER BY id ASC";
$vRes = mysqli_query($link_compras, $vSql) or die("Error al consultar catálogo: " . mysqli_error($link_compras));

// Cantidad de productos en el carrito actual
$total_items = 0;
if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $id_prod => $cantidad) {
        $total_items += $cantidad;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos - Carrito de Compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 40px 0; }</style>
</head>
<body>
    <div class="container">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Catálogo de Productos Informáticos</h3>
                <a href="ver_carrito.php" class="btn btn-warning font-weight-bold">
                    &#128722; Mi Carrito (<?php echo $total_items; ?>)
                </a>
            </div>
            <div class="card-body p-4">
                <p class="text-muted">Práctica 7 - Ejercicio 7: Carrito de compras implementado con Base de Datos <strong>Compras</strong> y <strong>variables de sesión</strong>.</p>
                
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Precio Unitario</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($fila = mysqli_fetch_array($vRes)) { ?>
                                <tr>
                                    <td><?php echo $fila['id']; ?></td>
                                    <td class="text-left font-weight-bold"><?php echo htmlspecialchars($fila['producto']); ?></td>
                                    <td class="text-success font-weight-bold">$<?php echo number_format($fila['precio'], 2, ',', '.'); ?></td>
                                    <td>
                                        <form action="agregar_carrito.php" method="post" style="display:inline;">
                                            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-success font-weight-bold">&plus; Agregar al Carrito</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white text-right">
                <a href="ver_carrito.php" class="btn btn-primary">Ver detalle del carrito &rarr;</a>
            </div>
        </div>
    </div>
    <?php
    mysqli_free_result($vRes);
    mysqli_close($link_compras);
    ?>
</body>
</html>
