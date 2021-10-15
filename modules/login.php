<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ingresar</title>
</head>

<body>
    <center>
        <br>
        <div class="modal-main">
            <div class="col-sm-8">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="user-img">
                            <center>
                                <img src="../img/avatar1.png" alt="" srcset="">
                            </center>
                        </div>

                    </div>
                    <div class="modal-body">
                        <form action="../db/ingresar.php" method="POST">
                            <tr>
                                <td>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">Correo</span>
                                        <input type="email" class="form-control" name="txtCorreo" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">Contraseña</span>
                                        <input type="password" class="form-control" name="txtPass" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </td>
                            </tr>
                            <br>
                            <center>
                                <input type="submit" class="btn btn-outline-success" value="Ingresar">
                                <a href="registro.php">
                                    <input type="button" class="btn btn-outline-primary" value="Registrarse">
                                </a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <!-- <br><br><br><br><br><br><br><br> -->
    <footer style="margin-top: 12%;">
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