<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Ciudad - Práctica 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>body { background: #f4f6f9; padding: 40px 0; }</style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Alta de Nueva Ciudad</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="alta_ciudad_accion.php" method="post">
                            <div class="form-group">
                                <label for="ciudad"><strong>Nombre de la Ciudad:</strong></label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ej: Rosario" required>
                            </div>

                            <div class="form-group">
                                <label for="pais"><strong>País:</strong></label>
                                <input type="text" class="form-control" id="pais" name="pais" placeholder="Ej: Argentina" required>
                            </div>

                            <div class="form-group">
                                <label for="habitantes"><strong>Cantidad de Habitantes:</strong></label>
                                <input type="number" class="form-control" id="habitantes" name="habitantes" placeholder="Ej: 1200000" min="1" required>
                            </div>

                            <div class="form-group">
                                <label for="superficie"><strong>Superficie (km²):</strong></label>
                                <input type="number" step="0.01" class="form-control" id="superficie" name="superficie" placeholder="Ej: 178.65" required>
                            </div>

                            <div class="form-group">
                                <label><strong>¿Tiene red de Metro / Subte?</strong></label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="metro1" name="tieneMetro" value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="metro1">Sí tiene Metro</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="metro0" name="tieneMetro" value="0" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="metro0">No tiene Metro</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-block mt-4">Guardar Ciudad</button>
                        </form>
                    </div>
                    <div class="card-footer bg-white text-center">
                        <a href="index.php" class="text-secondary">&larr; Volver al Menú Principal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
