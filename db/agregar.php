<?php
if (!isset($_POST['oculto'])) {
    exit();
}

include_once("conexion.php");

$nombre=$_POST['txtNombre'];
$apellidos=$_POST['txtApellidos'];
$notauno=$_POST['txtNotaUno'];
$notados=$_POST['txtNotaDos'];
$notatres=$_POST['txtNotaTres'];

$sentencia = $db->prepare("INSERT INTO estudiante(nombre_estudiante,apellidos_estudiante,nota_uno,nota_dos,nota_tres)
 VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$nombre,$apellidos,$notauno,$notados,$notatres]);

if ($resultado === TRUE) {
    header('Location: ../modules/boletin.php');
}else{
    echo "Lo siento ha ocurrido un error";
}
?>
