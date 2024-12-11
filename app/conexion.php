<?php
$host = 'localhost'; // Host de la base de datos
$usuario = 'root';   // Usuario de la base de datos
$contraseña = 'root';    // Contraseña de la base de datos
$base_datos = 'sistema_autenticacion'; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
