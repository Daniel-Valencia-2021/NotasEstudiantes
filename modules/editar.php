<?php
session_start();

if (!isset($_GET['id'])) {
    header("Location: boletin.php");
}

include_once '../db/conexion.php';

$id = $_GET['id'];
$sentencia = $db->prepare("SELECT * FROM estudiante WHERE id_estudiante = ?;");
$sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Editar estudiante</title>
</head>

<body>
    <br><br><br><br>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header user-img">
                <h5 class="modal-title" id="staticBackdropLabel">Editar estudiante</h5>
            </div>
            <div class="modal-body">
                <form action="../db/editarEstudiante.php" method="POST">
                    <tr>
                        <td>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Nombres</span>
                                <input type="text" class="form-control" placeholder="<?php echo $persona->nombre_estudiante; ?>" name="txt2Nombre" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Apellidos</span>
                                <input type="text" class="form-control" placeholder="<?php echo $persona->apellidos_estudiante; ?>" name="txt2Apellidos" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Nota #1</span>
                                <input type="number" class="form-control" placeholder="<?php echo $persona->nota_uno; ?>" name="txt2NotaUno" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Nota #2</span>
                                <input type="number" class="form-control" placeholder="<?php echo $persona->nota_dos; ?>" name="txt2NotaDos" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Nota #3</span>
                                <input type="number" class="form-control" placeholder="<?php echo $persona->nota_tres; ?>" name="txt2NotaTres" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </td>
                    </tr>
                    <br>
                    <center>
                        <input type="hidden" name="oculto" id="">
                        <input type="hidden" name="id2" value="<?php echo $persona->id_estudiante; ?>">
                        <a href="boletin.php">
                            <input type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" value="Regresar">
                        </a>
                        <input type="submit" class="btn btn-outline-success" value="Guardar">
                    </center>
                </form>

                

                <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
                <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> -->
                <script src="../js/popper.min.js"></script>
                <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->
                <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>