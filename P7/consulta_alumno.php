<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6: Consulta de Alumno</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 40px; }
        .card { max-width: 450px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="email"] { width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { margin-top: 20px; width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Ingreso al Sistema de Alumnos</h2>
        <p class="text-muted">Práctica 7 - Ejercicio 6: Ingrese el mail registrado en la tabla <code>alumnos</code> de <code>base2</code>.</p>
        <p class="small text-muted"><em>Ejemplos cargados: bautista@utn.edu.ar, juan.perez@gmail.com, maria.gomez@hotmail.com</em></p>

        <form action="validar_alumno.php" method="post">
            <label for="mail">Correo Electrónico:</label>
            <input type="email" id="mail" name="mail" placeholder="alumno@utn.edu.ar" required>

            <input type="submit" value="Verificar Alumno">
        </form>
    </div>
</body>
</html>
