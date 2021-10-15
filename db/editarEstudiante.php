<?php

//print_r($_POST);
if (!isset($_POST['oculto'])) {
    header('Location: ../modules/boletin.php');
}

include_once 'conexion.php';

$id2=$_POST['id2'];
$nombre2=$_POST['txt2Nombre'];
$apellido2=$_POST['txt2Apellidos'];
$primeranota2=$_POST['txt2NotaUno'];
$segundanota2=$_POST['txt2NotaDos'];
$terceranota2=$_POST['txt2NotaTres'];

$sentencia =$db->prepare("UPDATE estudiante SET nombre_estudiante = ?,apellidos_estudiante = ?,
                            nota_uno = ?,nota_dos = ?,nota_tres = ? WHERE id_estudiante = ?");

$resultado = $sentencia->execute([$nombre2,$apellido2,$primeranota2,$segundanota2,$terceranota2, $id2]);

if ($resultado === TRUE) {
    header('Location: ../modules/boletin.php');
}else {
    echo "No se pudo editar al estudiante";
}

?>