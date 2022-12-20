<!DOCTYPE html>
<html lang="es">

<head>
    <title>IPS</title>
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
                    <a class="navbar-brand" style="font-size:2.5rem" href="index.php">HealthSoft</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </div>
            </nav>
        </div>
        <h1 style="text-align:center">
            Listado de Citas
        </h1>
        <br></br>

        <div id="contenido" style="font-size:1.3rem">
            <table class="table table-striped table-bordered table-hover table-dark"
                style="margin: 1rem auto; width: 1200px; ">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Fecha</th>
                        <th>Nombre del médico</th>
                        <th>Diagnóstico</th>
                        <th>NIT IPS</th>
                        <th>NIT Afiliado</th>
                        <th>
                            <form action="listarCitas.php" method="POST" class="bg-dark">
                                <div class="col-sm-15">
                                    <input class="form-control bg-light" name="fecha1" type="date"
                                        placeholder="dd/mm/aaaa" id="fecha1" />
                                </div>


                                <div class="col-sm-15">
                                    <select action="listarCitas.php" method="post" class="form-control bg-dark"
                                        style="color: gray" name="nit">

                                        <?php
                                        include("conex.php");
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
                                </div>



                                <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
                            </form>

                        </th>




                    </tr>
                </thead>

                <?php

                $f1 = $_POST['fecha1'];
                $ips = $_POST['nit'];


                foreach ($link->query("SELECT * FROM `ordendeservicio` WHERE `fecha` = '$f1' and `nitips` ='$ips'") as $row) { ?>
                <tr>
                    <td>
                        <?php echo $row['codigo'] ?>
                    </td>
                    <td>
                        <?php echo $row['fecha'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombremedico'] ?>
                    </td>
                    <td>
                        <?php echo $row['diagnostico'] ?>
                    </td>
                    <td>
                        <?php echo $row['nitips'] ?>
                    </td>
                    <td>
                        <?php echo $row['nitafiliado'] ?>
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