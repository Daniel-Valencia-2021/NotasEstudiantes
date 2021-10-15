<?php
session_start();

include_once("../db/conexion.php");
$sentencia = $db->query("SELECT * FROM estudiante;");
$estudiantes = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Boletin estuduante</title>
</head>

<body>
    <header>
        <!-- <a href="../db/salir.php"><button>Salir</button></a>
        <h2 class="text-light"> Bienbenido profe<span class="badge badge-danger"<?php// echo $_SESSION['nombre'] ?></span>  </h2> -->
        <center>
            <div class="col-md-8 col-md-offset-2">
                <div class="card header">
                    <div class="card-body d-flex justify-content-between align-items-center text-light">
                        <h3>Estudiante: <span class="badge rounded-pill bg-primary"> <?php echo $_SESSION['nombre'] ?> </span></h3>
                        <a href="../db/salir.php" class="btn btn-outline-success btn-lg">Salir</a>
                    </div>
                </div>
            </div>
        </center>
    </header>
    <br>
    <h3 style="text-align: center;">Boletin</h3>
    <br><br>
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td>ID</td>
            <!--  <td>Foto</td> -->
            <td>Nombre/s</td>
            <td>Aprellidos</td>
            <td>Nota #1</td>
            <td>Nota #2</td>
            <td>Nota #3</td>
            <td>Nota #Final</td>
            <td>Estado</td>
        </tr>

        <?php
        foreach ($estudiantes as $dato) {
        ?>
            <tr>
                <td><?php echo $dato->id_estudiante ?></td>
                <!-- <td><?php //echo $dato->foto 
                            ?></td> -->
                <td><?php echo $dato->nombre_estudiante ?></td>
                <td><?php echo $dato->apellidos_estudiante ?></td>
                <td><?php echo $dato->nota_uno ?></td>
                <td><?php echo $dato->nota_dos ?></td>
                <td><?php echo $dato->nota_tres ?></td>
                <td><?php echo $final = ($dato->nota_uno + $dato->nota_dos + $dato->nota_tres) / 3 ?></td>
                <td><?php if ($final >= 3) {
                        echo "GANASTE";
                    } else {
                        echo "PERDISTE";
                    } ?></td>
            </tr>
        <?php
        }
        ?>

    </table>

    </div>
    </div>
    </div>
    </div>
</body>