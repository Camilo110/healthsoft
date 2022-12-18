<?php
include("conex.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM `afiliado` INNER JOIN `cotizante` ON `afiliado`.`dni`=`cotizante`.`dniafiliado`  WHERE dni='$id'";
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
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        function mostrar(id) {
            if (id == "estudiante") {
                $("#estudiante").show();
                $("#trabajador").hide();
                $("#autonomo").hide();
                $("#paro").hide();
            }

            if (id == "trabajador") {
                $("#estudiante").hide();
                $("#trabajador").show();
                $("#autonomo").hide();
                $("#paro").hide();
            }

        }
    </script>
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

        <form action="actualizar.php" method="POST" class="bg-dark">
            <div class="bg-shadow p-5 rounded-5 text-secondary shadow">
                <div class="col bg-dark text-white text-center">
                    <h3>Ingresar nuevo cotizante</h3>
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
                                placeholder="Ingrese nombres" id="codigo" value="<?php echo $row['nombre'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Fecha de nacimiento</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-dark " style="color: gray" name="fnac" type="date"
                                placeholder="dd/mm/aaaa" id="fecha" required value="<?php echo $row['fNacimiento'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Direccion</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="direccion" type="text"
                                placeholder="Ingrese Direccion" id="codigo" value="<?php echo $row['direccion'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Telefono</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="telefono" type="text"
                                placeholder="Ingrese Telefono" id="codigo" value="<?php echo $row['telefono'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Correo electronico</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="correo" type="text"
                                placeholder="Ingrese Correo electronico" id="correo"
                                value="<?php echo $row['correo'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Primera fecha de
                            Afiliación</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" style="color: gray" name="pfa" type="date"
                                placeholder="dd/mm/aaaa" id="fecha" value="<?php echo $row['fecha1afiliacion'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Salario</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="salario" type="text"
                                placeholder="Ingrese Salario" id="codigo" value="<?php echo $row['salario'] ?>">
                        </div>



                        <label class="col-form-label fw-bold " style="font-size: 1.1rem">¿dependiente o
                            independiente?</label>

                        <select action="index.php" method="post" id="status" name="status"
                            onChange="mostrar(this.value);" class="form-control bg-dark" style="color: gray">
                            <option value="estudiante">Independiente</option>
                            <option value="trabajador">Dependiente</option>
                        </select>


                    </div>
                    <div class="col">
                        <label class="col-form-label fw-bold " style="font-size: 1.1rem">Numero de documento</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark " name="dni" type="text"
                                placeholder="Ingrese Número de documento" id="dni" value="<?php echo $row['dni'] ?>"
                                readonly>
                        </div>
                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Apellidos</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="apellidos" type="text"
                                placeholder="Ingrese Apellidos" id="codigo" required
                                value="<?php echo $row['apellido'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Genero</label>
                        <div class="col-sm-15">
                            <select class="form-control bg-dark" style="color: gray" name="genero">
                                <option>Femenino</option>
                                <option>Masculino</option>
                                <option>Otro </option>

                            </select>
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Ciudad de residencia</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="residencia" type="text"
                                placeholder="Ingrese Ciudad" id="codigo" value="<?php echo $row['ciudad'] ?>">
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
                            <input class="form-control bg-light bg-dark" name="nitips" type="text"
                                placeholder="Ingrese NIT IPS" id="codigo" value="<?php echo $row['nitips'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Estado de afiliado</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="estadoAfi" type="text"
                                placeholder="Ingrese Estado de afiliado" id="codigo"
                                value="<?php echo $row['estadoafiliado'] ?>">
                        </div>

                        <label class="col-form-label fw-bold" style="font-size: 1.1rem">Rango salarial</label>
                        <div class="col-sm-15">
                            <input class="form-control bg-light bg-dark" name="ranSal" type="text"
                                placeholder="Ingrese Rango salarial" id="codigo"
                                value="<?php echo $row['rangosalarial'] ?>">
                        </div>

                        <div id="trabajador" class="element" style="display: none;">
                            <label class="col-form-label fw-bold" style="font-size: 1.1rem">
                                Selecciona a cual empresa trabajas</label>
                            <div class="col-sm-15">


                                <select action="index.php" method="post" class="form-control bg-dark"
                                    style="color: gray" name="empresa">

                                    <?php

                                    $consulta = "SELECT * FROM `empresa`";
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
                        </div>

                    </div>

                </div>

                <!-- Checkbox -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>

            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>