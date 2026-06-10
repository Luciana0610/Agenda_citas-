<?php
require 'conexion.php';

$id = (int)($_GET['id'] ?? 0);
if ($id) {
    $conn->query("DELETE FROM citas WHERE id = $id");
}
header('Location: index.php?msg=borrada');
exit;
