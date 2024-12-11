<?php
session_start();
session_destroy(); // Elimina la sesión
header('Location: login.php'); // Redirige a la página de login
exit();
?>
