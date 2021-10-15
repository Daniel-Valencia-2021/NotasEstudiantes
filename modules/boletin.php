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
    <title>Boletin profesor</title>
</head>

<body>
    <header>
        <!-- <a href="../db/salir.php"><button>Salir</button></a>
        <h2 class="text-light"> Bienbenido profe<span class="badge badge-danger"<?php// echo $_SESSION['nombre'] ?></span>  </h2> -->
        <center>
            <div class="col-md-8 col-md-offset-2">
                <div class="card header">
                    <div class="card-body d-flex justify-content-between align-items-center text-light">
                        <h3>Bienbenido <span class="badge rounded-pill bg-primary"> <?php echo $_SESSION['nombre'] ?> </span></h3>
                        <a href="../db/salir.php" class="btn btn-outline-success btn-lg">Salir</a>
                    </div>
                </div>
            </div>
        </center>
    </header>
    <br>
    <h3 style="text-align: center;">CRUD Boletin</h3>
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
            <td>Editar</td>
            <td>Eliminar</td>
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

                <td>
                    <a style="text-decoration:none" href="editar.php?id=<?php echo $dato->id_estudiante; ?>">
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#Modaleliminar">
                            Editar
                        </button>
                    </a>
                </td>

                <td>
                    <a style="text-decoration:none" href="../db/eliminar.php?id=<?php echo $dato->id_estudiante; ?>">
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Modaleliminar">
                            Eliminar
                        </button>
                    </a>
                </td>



            </tr>
        <?php
        }
        ?>

    </table>

    </div>
    </div>
    </div>
    </div>
    <!-- Fin del modal editar -->

    <!-- Insertar estudiantes -->
    <center>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar a un estudiante
        </button>
    </center>

    <!-- Modal agregar otro estudiante -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo estudiante</h5>
                </div>
                <div class="modal-body">
                    <form action="../db/agregar.php" method="POST">
                        <tr>
                            <td>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Nombres</span>
                                    <input type="text" class="form-control" placeholder="Nombres" name="txtNombre" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Apellidos</span>
                                    <input type="text" class="form-control" placeholder="Apellidos" name="txtApellidos" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Nota #1</span>
                                    <input type="number" min="0" max="5" class="form-control" placeholder="Nota #1" name="txtNotaUno" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Nota #2</span>
                                    <input type="number" min="0" max="5" class="form-control" placeholder="Nota #2" name="txtNotaDos" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Nota #3</span>
                                    <input type="number" min="0" max="5" class="form-control" placeholder="Nota #3" name="txtNotaTres" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </td>
                        </tr>
                        <div class="modal-footer">
                            <input type="hidden" name="oculto" value="1">
                            <input type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal" value="Close">
                            <input type="submit" class="btn btn-outline-success" value="Guardar">

                            <!--  <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-success">Save changes</button> -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Fin Insertar estudiantes -->
    <footer style="margin-top: 19%;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark">Daniel Alexis Valencia Nieves</a>
        </div>
    </footer>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> -->
    <script src="../js/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>