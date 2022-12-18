<?php 
    include("conex.php");
    $con=conectar();
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
    <form action = "aportesBack.php" method = "POST" id="formAportes" enctype="multipart/form-data">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 30rem">
            
            <div class="text-center fs-3 fw-bold">Sistemas de Registro de Aportes</div>
            <div class="form-group row">
                <label class="col-form-label fw-bold" style="font-size: 1.1rem">Fecha de Pago</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="fechaPago" type="date" placeholder="dd/mm/aaaa" id="FechaPago" />
                </div>
              
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Valor Pagado</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="valorPago" type="text" placeholder="Monto del Pago" id="ValorPago" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">DNI del Cotizante</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="idCotizante" type="text" placeholder="Cedula del cotizante" id="idCotizante" />
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">NIT de Empresa</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="codEmpresa" type="text" placeholder="Nit empresa" id="codEmpresa" />
                </div>
            </div>
           
            <div>
                <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Registrar Aporte</button>
            </div>
            
        </div>
    </form>  
    <form action = "aportesBloque.php" method = "POST" id="formAportes" enctype="multipart/form-data">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 30rem">
            <div class="text-center fs-3 fw-bold">Seleccion de archivos para registro en bloque</div>
            <div class="form-group row">
                <label class="col-form-label fw-bold" style="font-size: 1.1rem">Fecha de Pago</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="archivo" type="file" id="FechaPago" />
                </div>  
            <div>
                <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Subir Archivo</button>
            </div>
                  
        </div>
    </form> 
</body>
</html>
