<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mostrar Registros de MySQL con PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body class="bg-dark py-5 text-white">
    <?php
    $link = new PDO('mysql:host=localhost;dbname=healthsoft', 'root', '');
    ?>
    <div class="todo ">

        <div id="cabecera">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">HealthSoft</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="loginAfiliado.html">Afiliado</a></li>
                            <li class="nav-item"><a class="nav-link" href="loginBanco.html">Banco</a></li>
                            <li class="nav-item"><a class="nav-link" href="loginAdmin.php">Administrador</a></li>


                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="contenido">
            <table class="table table-striped table-bordered table-hover table-dark"
                style="margin: 1rem auto; width: 1200px; ">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Tipo documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha nacimiento</th>
                        <th>Genero</th>
                        <th>Direccion</th>
                        <th>Residencia</th>
                        <th>Telefono</th>
                        <th>Estado civil</th>
                        <th>Correo</th>
                        <th>NIT IPS</th>
                        <th> <a href="newafil.php"> <button type="button" class="btn btn-info">Nuevo</button> </a>
                        </th>

                    </tr>
                </thead>


                <?php foreach ($link->query('SELECT * from healthsoft.afiliado') as $row) { ?>
                <tr>
                    <td>
                        <?php echo $row['dni'] ?>
                    </td>
                    <td>
                        <?php echo $row['tipodoc'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombre'] ?>
                    </td>
                    <td>
                        <?php echo $row['apellido'] ?>
                    </td>
                    <td>
                        <?php echo $row['fNacimiento'] ?>
                    </td>
                    <td>
                        <?php echo $row['genero'] ?>
                    </td>
                    <td>
                        <?php echo $row['direccion'] ?>
                    </td>
                    <td>
                        <?php echo $row['ciudad'] ?>
                    </td>
                    <td>
                        <?php echo $row['telefono'] ?>
                    </td>
                    <td>
                        <?php echo $row['estadocivil'] ?>
                    </td>
                    <td>
                        <?php echo $row['correo'] ?>
                    </td>
                    <td>
                        <?php echo $row['nitips'] ?>
                    </td>
                    <th><a href="update.php?id=<?php echo $row['dni'] ?>" class="btn btn-info">Editar</a>
                    </th>
                    <th><a href="delete.php?id=<?php echo $row['dni'] ?>" class="btn btn-danger">Eliminar</a>
                    </th>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div id="footer" style = "text:align-center">
                <p> Todos los derechos reservados</p>
        </div>

    </div>


</body>

</html>