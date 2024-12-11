<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="POST">
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required><br>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>

