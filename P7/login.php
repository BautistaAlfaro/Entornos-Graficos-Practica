<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5: Formulario de Login - Práctica 7</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; }
        .card { max-width: 400px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { margin-top: 20px; width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Página 1: Login de Cliente</h2>
        <p class="text-muted">Práctica 7 - Ejercicio 5: Ingrese su usuario y clave para registrarlos en variables de sesión.</p>

        <form action="crear_sesion.php" method="post">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ej: bautista_utn" required>

            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" placeholder="••••••••" required>

            <input type="submit" value="Iniciar Sesión (Página 2)">
        </form>
    </div>
</body>
</html>
