<?php 
    include("conex.php");
    $con=conectar();

$nit=$_GET['nit'];

$sql="SELECT * from healthsoft.empresa WHERE nit='$nit'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <form action="actualizaremp.php" method="POST">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 30rem">
            <div class="d-flex justify-content-center">
                <img src="" alt="" style="height: 7rem" />
            </div>
            <div class="text-center fs-3 fw-bold">Editar Empresa</div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">NIT</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="nit" type="text" placeholder="Ingrese el NIT"
                        id="servicio"  readonly value="<?php echo $row['nit'] ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Razón social</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="razonsocial" type="text"
                        placeholder="Ingrese la razón social" id="diagnostico" value="<?php echo $row['razonsocial'] ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Ciudad</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="ciudad"  placeholder="Ingrese su ciudad" id="fecha" value="<?php echo $row['ciudad'] ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Dirección</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="direccion" type="text"
                        placeholder="Ingrese Dirección" id="dni" value="<?php echo $row['direccion'] ?>"/>
                </div>
            </div>

            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Telefono</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="telefono" type="text"
                        placeholder="Ingrese su Telefono" id="dni" value="<?php echo $row['telefono'] ?>"/>
                </div>
            </div>

            <div class="form-group row">
                <label class=" col-form-label fw-bold" style="font-size: 1.1rem">Nombre de contacto</label>
                <div class="col-sm-15">
                    <input class="form-control bg-light" name="contacto" type="text"
                        placeholder="Ingrese su  Nombre de contacto" id="dni" value="<?php echo $row['nombrecontacto'] ?>"/>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Editar Empresa</button>
            </div>
            
            

        </div>
    </form>
</body>
</html>