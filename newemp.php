<?php 
    include("conex.php");
    $con=conectar();



$sql="SELECT * from healthsoft.empresa";
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
    <body>
                <div class="container mt-5">
                    <form action="ingresaremp.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['dni']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nit" placeholder="NIT">
                                <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" >
                                <input type="text" class="form-control mb-3" name="contacto" placeholder="Número Contacto" >
                                <input type="text" class="form-control mb-3" name="razonsocial" placeholder="Razón Social" >
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" >
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Registrar Empresa">
                    </form>
                    
                </div>
    </body>