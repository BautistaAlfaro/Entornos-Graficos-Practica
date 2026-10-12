<?php
/**
 * UTN FRRO - Entornos Gráficos
 * Práctica N° 7 - Ejercicio 7: Ver Carrito de Compras
 * Archivo: ver_carrito.php
 */
session_start();
include("conexion_compras.php");

// Procesar acción de vaciar carrito
if (isset($_GET['accion']) && $_GET['accion'] === 'vaciar') {
    unset($_SESSION['carrito']);
    header("Location: ver_carrito.php");
    exit();
}

$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : array();
$productos_detalle = array();
$total_general = 0;

if (!empty($carrito)) {
    // Obtenemos los IDs presentes en el carrito para consultar la BD
    $ids = implode(',', array_map('intval', array_keys($carrito)));
    $vSql = "SELECT * FROM catalogo WHERE id IN ($ids)";
    $vRes = mysqli_query($link_compras, $vSql) or die("Error al consultar productos: " . mysqli_error($link_compras));

    while ($row = mysqli_fetch_array($vRes)) {
        $id = $row['id'];
        $cant = $carrito[$id];
        $subtotal = $cant * $row['precio'];
        $total_general += $subtotal;

        $productos_detalle[] = array(
            'id'       => $id,
            'producto' => $row['producto'],
            'precio'   => $row['precio'],
            'cantidad' => $cant,
            'subtotal' => $subtotal
        );
    }
    mysqli_free_result($vRes);
}

mysqli_close($link_compras);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Carrito de Compras - Práctica 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 40px 0; }</style>
</head>
<body>
    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">&#128722; Resumen del Carrito de Compras</h3>
                <a href="catalogo.php" class="btn btn-sm btn-outline-light font-weight-bold">&larr; Seguir Comprando</a>
            </div>
            <div class="card-body p-4">
                <?php if (!empty($productos_detalle)) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Precio Unitario</th>
                                    <th>Cantidad</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($productos_detalle as $item) { ?>
                                    <tr>
                                        <td><?php echo $item['id']; ?></td>
                                        <td class="text-left font-weight-bold"><?php echo htmlspecialchars($item['producto']); ?></td>
                                        <td>$<?php echo number_format($item['precio'], 2, ',', '.'); ?></td>
                                        <td><span class="badge badge-primary px-3 py-2"><?php echo $item['cantidad']; ?></span></td>
                                        <td class="font-weight-bold">$<?php echo number_format($item['subtotal'], 2, ',', '.'); ?></td>
                                    </tr>
                                <?php } ?>
                                <tr class="table-success font-weight-bold" style="font-size: 18px;">
                                    <td colspan="4" class="text-right">TOTAL GENERAL:</td>
                                    <td>$<?php echo number_format($total_general, 2, ',', '.'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="ver_carrito.php?accion=vaciar" class="btn btn-outline-danger" onclick="return confirm('¿Está seguro de vaciar el carrito?');">
                            &times; Vaciar Carrito
                        </a>
                        <button class="btn btn-success btn-lg" onclick="alert('¡Compra simulada finalizada con éxito!');">
                            Finalizar Compra
                        </button>
                    </div>
                <?php } else { ?>
                    <div class="text-center py-5">
                        <h4 class="text-muted">El carrito de compras está vacío.</h4>
                        <p class="text-muted">Explore nuestro catálogo para agregar productos a su pedido.</p>
                        <a href="catalogo.php" class="btn btn-primary mt-3">&larr; Ir al Catálogo de Productos</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
