<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class=" bg-dark" action="actualizar.php" method="POST">
    <?php
    $link = new PDO('mysql:host=localhost;dbname=healthsoft', 'root', '');
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.php">HealthSoft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>



    <div class="container mt-2">
        <div class="row">
            <div class="col bg-dark text-white text-center">
                <h1>INFORMACIÓN AFILIADOS</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col col bg-dark text-white text-center">
                <h3>Datos cotizante</h3>
            </div>
            <div class="col col bg-dark text-white text-center">
                <h3>Datos vinculacion</h3>
            </div>

            <div class="row">
                <div class="col text-white text-center">
                    <div class="panel panel-default bg-dark ">
                        <?php

                        include("conex.php");
                        $con = conectar();

                        $id = $_GET['id'];

                        $sql = "SELECT * FROM `afiliado` INNER JOIN `cotizante` ON `afiliado`.`dni`=`cotizante`.`dniafiliado` WHERE `cotizante`.`dniafiliado`  ='$id';";

                        foreach ($link->query($sql) as $row) { ?>


                        <div class="panel-body">Nombre:
                            <?php echo $row['nombre'] ?><br>
                            Apellido:
                            <?php echo $row['apellido'] ?><br>
                            Identificacion:
                            <?php echo $row['dni'] ?> <br>
                            Correo:
                            <?php echo $row['correo'] ?><br>
                            Telefono
                            <?php echo $row['telefono'] ?><br>
                            Dirección:
                            <?php echo $row['direccion'] ?><br>
                            Ciudad:
                            <?php echo $row['ciudad'] ?><br>

                        </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col text-white text-center">
                    <div class="panel panel-default bg-dark">
                        <?php

                      
                        $con = conectar();

                        $id = $_GET['id'];

                        $sql = "SELECT * FROM `cotizante` INNER JOIN `contrato` ON `cotizante`.`dniafiliado`=`contrato`.`cotizante`
                        inner join `afiliado` on `contrato`.`cotizante`= `afiliado`.`dni`
                        WHERE `cotizante`.`dniafiliado`  ='$id';";

                        foreach ($link->query($sql) as $row) { ?>


                        <div class="panel-body">Estado afiliacion:
                            <?php echo $row['estado'] ?><br>
                            <br> IPS: 
                            <?php echo $row['nitips'] ?><br>
                        </div>


                    </div>

                    <?php
                        }
                        ?>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col bg-dark text-white text-center">
                <h3>Información beneficiarios</h3>
            </div>
        </div>

        <div class="row">
            <div class="col text-white text-center">
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
                                <th>Parentesco</th>


                            </tr>
                        </thead>


                        <?php

                        $con = conectar();

                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `afiliado` INNER JOIN `beneficiario` ON `afiliado`.`dni`=`beneficiario`.`dniafiliado` WHERE `beneficiario`.`dnicotizante` ='$id';";

                        foreach ($link->query($sql) as $row) { ?>
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
                                <?php echo $row['parentezco'] ?>
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


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>