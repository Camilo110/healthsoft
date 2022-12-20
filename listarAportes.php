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
        Lista de Aportes
    </h1>
    <br></br>

    <div class="todo ">
        <div id="contenido" style="font-size:1.3rem">
            <table class="table table-striped table-bordered table-hover table-dark"
                style="margin: 1rem auto; width: 1200px; ">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Fecha de pago</th>
                        <th>Valor pago</th>
                        <th>Cotizante contrato</th>
                        <th>Empresa contrato</th>


                        <th>
                            <form action="listarAportes.php" method="POST" class="bg-dark">
                                <div class="col-sm-15">
                                    <input class="form-control bg-light" name="fecha1" type="date"
                                        placeholder="dd/mm/aaaa" id="fecha1" />
                                </div>
                                <div class="col-sm-15">
                                    <input class="form-control bg-light" name="fecha2" type="date"
                                        placeholder="dd/mm/aaaa" id="fecha2" />
                                </div>
                        </th>
                        <th><button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button></th>
                        </form>

                        </th>

                    </tr>
                </thead>

                <?php


                $f1 = $_POST['fecha1'];
                $f2 = $_POST['fecha2'];
                foreach ($link->query("SELECT * FROM `aportes` WHERE fechapago BETWEEN  '$f1' and '$f2'") as $row) { ?>
                <tr>
                    <td>
                        <?php echo $row['codigo'] ?>
                    </td>
                    <td>
                        <?php echo $row['fechapago'] ?>
                    </td>
                    <td>
                        <?php echo $row['valorpago'] ?>
                    </td>
                    <td>
                        <?php echo $row['cotizante_contrato'] ?>
                    </td>
                    <td>
                        <?php echo $row['empresa_contrato'] ?>
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