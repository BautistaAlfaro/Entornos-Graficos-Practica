<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3.b - Formulario Auto-procesado</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .box { background: #f8f9fa; padding: 20px; border: 1px solid #ddd; max-width: 400px; border-radius: 6px; }
    </style>
</head>
<body>
    <h2>Ejercicio 3.b: Validación de Edad</h2>
    <p>Este script se utiliza para procesar formularios en una sola página (página auto-referenciada con <code>$_SERVER['PHP_SELF']</code>), validando si el usuario es mayor o menor de edad.</p>

    <div class="box">
        <?php
        if (!isset($_POST['submit'])) {
        ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="age">Edad:</label>
                <input type="number" id="age" name="age" size="3" min="0" max="120" required>
                <input type="submit" name="submit" value="Ir">
            </form>
        <?php
        } else {
            $age = intval($_POST['age']);
            if ($age >= 21) {
                echo "<p style='color: green; font-weight: bold;'>Mayor de edad (Edad ingresada: $age)</p>";
            } else {
                echo "<p style='color: red; font-weight: bold;'>Menor de edad (Edad ingresada: $age)</p>";
            }
            echo '<p><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">&larr; Volver a consultar</a></p>';
        }
        ?>
    </div>
</body>
</html>
