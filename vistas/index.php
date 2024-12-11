<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php'); // Si el usuario está logueado, redirige al dashboard
} else {
    header('Location: login.php'); // Si no está logueado, redirige al login
}
?>
