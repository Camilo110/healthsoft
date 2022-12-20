<?php
include("conex.php");
$con = conectar();



$sql = "SELECT * from healthsoft.afiliado";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar beneficiario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



</head>

<body class=" bg-dark">
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

    <div class="container">

        <form action="ingresarBen.php" method="POST" class="bg-dark">
            <div class="bg-shadow p-5 rounded-5 text-secondary shadow">
                <div class="col bg-dark text-white text-center">
                    <h3>Ingresar nuevo beneficiario</h3>
                </div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <label class="col-form-label fw-bold " style="font-size: 1.1rem">Tipo de documento</label>
                        <div class="col-sm-15 bg-dark">
                            <select class="form-control bg-dark" style="color: gray" name="t_d">
                                <option>Cedula</option>
                                <option>Tarjeta de identidad</option>
                            </select>
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Nombres</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="nombre" type="text"
                                placeholder="Ingrese nombres" id="codigo" />
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Fecha de nacimiento</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-dark " style="color: gray" name="fnac" type="date"
                                placeholder="dd/mm/aaaa" id="fecha" />
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Direccion</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="direccion" type="text"
                                placeholder="Ingrese Direccion" id="codigo" />
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Telefono</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="telefono" type="text"
                                placeholder="Ingrese Telefono" id="codigo" />
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Correo electronico</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="correo" type="text"
                                placeholder="Ingrese Correo electronico" id="correo" />
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">DNI Cotizante</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="dniCot" type="text"
                                placeholder="Ingrese DNI Cotizante" id="codigo" />
                        </div>



                    </div>
                    <div class="col">
                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Numero de documento</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="dni" type="text"
                                placeholder="Ingrese Número de documento" id="codigo" />
                        </div>
                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Apellidos</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="apellidos" type="text"
                                placeholder="Ingrese Apellidos" id="codigo" />
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Genero</label>
                        <div class="col-sm-15">
                            <select class="form-control bg-dark" style="color: gray" name="genero">
                                <option>Femenino</option>
                                <option>Casado</option>
                                <option>Otro </option>

                            </select>
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Ciudad de residencia</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="residencia" type="text"
                                placeholder="Ingrese Ciudad" id="codigo" />
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Estado civil</label>
                        <div class="col-sm-15">
                            <select class="form-control bg-dark" style="color: gray" name="ecivil">
                                <option>Soltero</option>
                                <option>Casado</option>
                                <option>Separado </option>
                                <option>Divorciado </option>
                                <option>Unión de hecho </option>
                                <option>Viudo </option>

                            </select>
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">NIT IPS</label>
                        <div class="col-sm-15">
                            <select action="index.php" method="post" class="form-control bg-dark" style="color: gray"
                                name="nitips">

                                <?php

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

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Parentesco </label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="Parentesco" type="text"
                                placeholder="Ingrese Parentesco" id="codigo" />
                        </div>



                    </div>

                </div>


                <!-- Checkbox -->


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Registrar beneficiario</button>

            </div>
        </form>
    </div>


</body>

</html>