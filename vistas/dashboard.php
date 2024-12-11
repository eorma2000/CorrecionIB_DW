<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php'); // Si no está logueado, redirige al login
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Esta es tu página principal.</p>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>
