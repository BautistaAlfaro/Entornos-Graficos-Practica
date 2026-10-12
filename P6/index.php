<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ABML de Ciudades - Base de Datos Capitales</title>
    <!-- Bootstrap CSS v4.3.1 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body { background-color: #f4f6f9; }
        .hero { background: linear-gradient(135deg, #007bff, #0056b3); color: white; padding: 40px 0; margin-bottom: 30px; border-radius: 0 0 15px 15px; }
        .menu-card { transition: transform 0.2s, box-shadow 0.2s; border: none; border-radius: 10px; }
        .menu-card:hover { transform: translateY(-5px); box-shadow: 0 8px 15px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="hero text-center">
        <div class="container">
            <h1 class="display-4 font-weight-bold">Gestión de Ciudades (ABML)</h1>
            <p class="lead mb-0">Práctica N° 6 - PHP & MySQL (Base de Datos: <strong>Capitales</strong>)</p>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <!-- Opción: Alta -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card menu-card shadow-sm h-100 text-center p-3">
                    <div class="card-body">
                        <div class="display-4 text-success mb-2">&plus;</div>
                        <h4 class="card-title font-weight-bold">Alta de Ciudad</h4>
                        <p class="card-text text-muted small">Registrar una nueva ciudad en la base de datos.</p>
                        <a href="alta_ciudad.php" class="btn btn-success btn-block mt-3">Ir al Alta</a>
                    </div>
                </div>
            </div>

            <!-- Opción: Baja -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card menu-card shadow-sm h-100 text-center p-3">
                    <div class="card-body">
                        <div class="display-4 text-danger mb-2">&times;</div>
                        <h4 class="card-title font-weight-bold">Baja de Ciudad</h4>
                        <p class="card-text text-muted small">Eliminar un registro existente por su identificador.</p>
                        <a href="baja_ciudad.php" class="btn btn-danger btn-block mt-3">Ir a la Baja</a>
                    </div>
                </div>
            </div>

            <!-- Opción: Modificación -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card menu-card shadow-sm h-100 text-center p-3">
                    <div class="card-body">
                        <div class="display-4 text-warning mb-2">&#9998;</div>
                        <h4 class="card-title font-weight-bold">Modificación</h4>
                        <p class="card-text text-muted small">Actualizar habitantes, superficie o datos de la ciudad.</p>
                        <a href="modificacion_ciudad.php" class="btn btn-warning btn-block mt-3 text-white">Ir a Modificar</a>
                    </div>
                </div>
            </div>

            <!-- Opción: Listado Completo -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card menu-card shadow-sm h-100 text-center p-3">
                    <div class="card-body">
                        <div class="display-4 text-info mb-2">&#9776;</div>
                        <h4 class="card-title font-weight-bold">Listado Total</h4>
                        <p class="card-text text-muted small">Ver todas las ciudades sin paginación.</p>
                        <a href="listado_ciudades.php" class="btn btn-info btn-block mt-3">Ver Listado</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Opción destacada: Listado Paginado -->
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-8">
                <div class="card menu-card shadow-sm text-center p-4 border-primary">
                    <div class="card-body">
                        <h3 class="card-title text-primary font-weight-bold">Listado con Paginación</h3>
                        <p class="card-text text-muted">Explorar la tabla con cálculo dinámico de páginas, navegación anterior/siguiente y cláusula <code>LIMIT</code> de MySQL.</p>
                        <a href="listado_paginado.php" class="btn btn-primary btn-lg px-5">Abrir Listado Paginado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
