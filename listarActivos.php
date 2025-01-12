<!DOCTYPE html>
<html lang="es">

<head>
    <title>Afiliado</title>
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


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" style="font-size:2.5rem" href="index.php">HealthSoft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            </div>
        </div>
    </nav>
    <h1 style="text-align:center">
        Listo Afiliados activos
    </h1>
    <br></br>

    <div class="todo ">
        <div id="contenido" style="font-size:1.3rem">
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
        

                        <th>
                            <form action="listarActivos.php" method="POST" class="bg-dark">
                                <select class="selectpicker" data-show-subtext="true" data-live-search="true"
                                    class="form-control bg-dark" style="color: gray" name="niti">

                                    <?php
                                    include "conex.php";
                                    $con = conectar();
                                    $consulta = "SELECT * FROM `ips`";
                                    $resultado = mysqli_query($con, $consulta);
                                    $contador = 0;

                                    while ($misdatos = mysqli_fetch_assoc($resultado)) {
                                        $contador++; ?>
                                    <option>
                                        <?php echo $misdatos['nit']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                        </th>
                        <th><button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button></th>
                        </form>

                        </th>

                    </tr>
                </thead>

                <?php

                $nit = $_POST['niti'];
                foreach ($link->query("SELECT * 
                FROM `afiliado` 
                WHERE `nitips` = '$nit' and (`dni` in (
                    SELECT c.`dniafiliado`
                    FROM `cotizante` c
                    WHERE c.`dniafiliado` in(
                        SELECT co.`cotizante`
                        FROM `contrato` co
                        WHERE `estado` = 'Activo')) or `dni` in 
                        (   SELECT b.`dniafiliado`
                            FROM `beneficiario` b
                            WHERE b.`dnicotizante` in (
                                SELECT cc.`dniafiliado`
                                FROM `cotizante` cc
                                WHERE cc.`dniafiliado` in(
                                    SELECT coco.`cotizante`
                                    FROM `contrato` coco
                                    WHERE `estado` = 'Activo'))));") as $row) { ?>
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
                    

                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div id="footer" style="text:align-center">
            <p> Todos los derechos reservados</p>
        </div>
    </div>
</body>

</html>