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
                    <a class="navbar-brand" style ="font-size:2.5rem" href="index.php">HealthSoft</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </div>
            </nav>
        </div>
        <h1 style= "text-align:center">
        Gestionar Empresas
        </h1>
        <br></br>

        <div id="contenido" style ="font-size:1.3rem">
            <table class="table table-striped table-bordered table-hover table-dark"
                style="margin: 1rem auto; width: 1200px; ">
                <thead>
                    <tr>
                        <th>NIT</th>
                        <th>Ciudad</th>
                        <th>Dirección</th>
                        <th>Contacto</th>
                        <th>Razón Social</th>
                        <th>Telefono</th>
                        <th> <a href="newemp.php"> <button style ="font-size:1.2rem" type="button" class="btn btn-info">Nuevo</button> </a>
                        </th>

                    </tr>
                </thead>

                <?php foreach ($link->query('SELECT * from healthsoft.empresa') as $row) { ?>
                <tr>
                    <td>
                        <?php echo $row['nit'] ?>
                    </td>
                    <td>
                        <?php echo $row['ciudad'] ?>
                    </td>
                    <td>
                        <?php echo $row['direccion'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombrecontacto'] ?>
                    </td>
                    <td>
                        <?php echo $row['razonsocial'] ?>
                    </td>
                    <td>
                        <?php echo $row['telefono'] ?>
                    </td>
                    <th><a style ="font-size:1.2rem" href="updateemp.php?nit=<?php echo $row['nit'] ?>" class="btn btn-info">Editar</a>
                    </th>
                    <th><a style ="font-size:1.2rem"  href="deleteemp.php?nit=<?php echo $row['nit'] ?>" class="btn btn-danger">Eliminar</a>
                    </th>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-muted">© 2022 SinegiaSoft, Inc</p>
          
              
            </footer>
          </div>
    </div>
</body>

</html>