<?php

if (!isset($_GET['id'])) {
    exit();
}

$codigo = $_GET['id'];
include_once 'conexion.php';

$sentencia= $db->prepare("DELETE FROM estudiante WHERE id_estudiante = ?");
$resultado=$sentencia->execute([$codigo]);

if ($resultado === TRUE) {
    header('Location: ../modules/boletin.php');
}else {
    echo "Error";
}
?>