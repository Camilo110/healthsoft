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
    <form action="vinculacion.php" method="POST" id="formAportes" enctype="multipart/form-data">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 30rem">

            <div class="text-center fs-3 fw-bold">Registro de vinculación</div>

            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">DNI del Cotizante</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="idCotizante" type="text"
                        placeholder="Cedula del cotizante" id="idCotizante" />
                </div>
            </div>

            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Empresa</label>
                <div class="col-sm-15">
                    <select action="index.php" method="post" class="form-control bg-dark" style="color: gray"
                        name="codEmpresa">

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

            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Salario base</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="salarioBase" type="text"
                        placeholder="Ingrerse Salario base" id="idCotizante" />
                </div>
            </div>


            <div>
                <button type="submit"
                    class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Registrar
                    Aporte</button>
            </div>

        </div>
    </form>
    <form action="retiro.php" method="POST" id="formAportes" enctype="multipart/form-data">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 30rem">
            <div class="text-center fs-3 fw-bold">Registro de retiro</div>

            <div class="form-group row">
                <label class="col-form-label fw-bold" style="font-size: 1.1rem">DNI Cotizante</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="dniC" type="text"
                        placeholder="Ingrese el DNI Cotizante" id="dni" />
                </div>

                <label class="col-form-label fw-bold" style="font-size: 1.1rem">NIT Empresa</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="nitE" type="text"
                        placeholder="Ingrese el NIT Empresa" id="dni" />
                </div>

                <div>
                    <button type="submit"
                        class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Reportar
                        retiro</button>
                </div>

            </div>
    </form>
</body>

</html>