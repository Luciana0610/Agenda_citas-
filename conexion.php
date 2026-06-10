<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');          // En XAMPP por defecto vacío
define('DB_NAME', 'agenda_citas');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("<div style='color:red;padding:20px;font-family:sans-serif;'>
        ❌ Error de conexión: " . $conn->connect_error . "
        <br><br>¿Tienes MySQL activo en XAMPP y la base de datos creada?
        <br>Ejecuta primero el archivo <b>database.sql</b> en phpMyAdmin.
    </div>");
}

$conn->set_charset("utf8");
?>
