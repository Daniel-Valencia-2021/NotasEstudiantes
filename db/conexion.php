<?php
$usuario="root";
$contraseña="";
$dbname="dbnotas";

    try{

        $db=new PDO('mysql:host=localhost; dbname='.$dbname,$usuario,$contraseña);

    }catch (Exception $e){
        echo"No se pudo conectar a la db= ".$e->getMessage();
    }
?>