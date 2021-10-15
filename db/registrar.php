<?php

if (!isset($_POST['esconder'])) {
    exit();
}

include_once("conexion.php");

if (isset($_POST['option']) == "profesor") {
    $estado=1;
}else if(isset($_POST['option']) == "estudiante"){
    $estado=2;
}

$nombre=$_POST['txtNombre'];
$correo=$_POST['txtCorreo'];
$contrasena=$_POST['txtPass'];


$sentencia = $db->prepare("INSERT INTO usuario(nombre_usu, email_usu, password_us, estado) 
VALUES (?,?,?,?);");

$resultado = $sentencia->execute([$nombre,$correo,$contrasena,$estado]);

if ($resultado === TRUE) {
    header('Location: ../modules/login.php');
}else {
    echo "ERROR DESCONOCIDO";
}


?>