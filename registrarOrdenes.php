<?php
include("conex.php");
$con = conectar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <form action="registrarOrdenesBack.php" method="POST" id="formAportes">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 30rem">
            <div class="d-flex justify-content-center">
                <img src="" alt="" style="height: 7rem" />
            </div>
            <div class="text-center fs-3 fw-bold">Registro de Ordenes</div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Descripcion deñ Servicio</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="servicio" type="text" placeholder="describa el servicio"
                        id="servicio" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Diagnostico</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="diagnostico" type="text"
                        placeholder="ingrese el diagnostico" id="diagnostico" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Fecha</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="fecha" type="date" placeholder="dd/mm/aaaa" id="fecha" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">DNI del Afiliado</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="dni" type="text"
                        placeholder="ingrese numero de documento" id="dni" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">NIT IPS</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="nit" type="text" placeholder="ingrese el nit de la IPS"
                        id="nit" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Nombre del Medico</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="medico" type="text"
                        placeholder="ingrese el nombre del medico" id="medico" />
                </div>
            </div>

            <div>
                <button type="submit"
                    class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Registrar
                    Orden</button>
            </div>

        </div>
    </form>
</body>

</html>




