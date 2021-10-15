<?php
session_start();
include_once("conexion.php");

$usuario = $_POST['txtCorreo'];
$contra = $_POST['txtPass'];

$sentencia = $db->prepare('SELECT * FROM usuario WHERE email_usu = ? and password_us = ?;');

$sentencia->execute([$usuario, $contra]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);




if ($datos === FALSE) {
    echo "<script> alert ('Usuario o contraseña incorrectos') 
    window.location='../modules/login.php';    
    </script>";
} elseif ($sentencia->rowCount() == 1) {

    switch ($datos->estado) {
        case 1:
            echo "<script> alert ('Hola ADMIN');    
    </script>";
            echo $_SESSION['nombre'] = $datos->nombre_usu;
            header("Location: ../modules/boletin.php");
            break;

        case 2:
        echo "<script> alert ('Hola ESTUDIANTE');    
        </script>";
        echo $_SESSION['nombre'] = $datos->nombre_usu;
       header("Location: ../modules/boletin_estu.php");
            break;
    }
}
