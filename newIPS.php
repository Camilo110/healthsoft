<?php
include("conex.php");
$con = conectar();



$sql = "SELECT * from healthsoft.ips";
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

</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <form action="ingresarIPS.php" method="POST">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 30rem">
            <div class="d-flex justify-content-center">
                <img src="" alt="" style="height: 7rem" />
            </div>
            <div class="text-center fs-3 fw-bold">Registrar IPS</div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">NIT</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="nit" type="number" placeholder="Ingrese el NIT"
                        id="servicio" min="0" pattern="^[0-9]+" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Razón social</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="razonsocial" type="text"
                        placeholder="Ingrese la razón social" id="diagnostico" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Nivel de atención</label>
                <div class="col-sm-15">

                    <select class="form-control bg-light" name="nivelatencion" id="nivelatencion">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Servicio prestados</label>
                <div class="col-sm-15">
                    <select class="form-control bg-light" name="serviciosprestados" id="serviciosprestados">
                        <option>Urología</option>
                        <option>Consulta externa</option>
                        <option>Cirugía</option>
                        <option>Odontología</option>
                        <option>Enfermería</option>
                        <option>Ortopedia</option>
                        <option>Examenes RX</option>
                    </select>

                </div>
            </div>



            <div>
                <button type="submit"
                    class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Registrar IPS</button>
            </div>



        </div>
    </form>
</body>

</html>