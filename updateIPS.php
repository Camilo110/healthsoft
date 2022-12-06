<?php 
    include("conex.php");
    $con=conectar();

$nit=$_GET['nit'];

$sql="SELECT * from healthsoft.ips WHERE nit='$nit'";
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
                    <form action="actualizarIPS.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['nit']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nit" placeholder="NIT" value="<?php echo $row['nit']  ?>">
                                <input type="text" class="form-control mb-3" name="razonsocial" placeholder="Razón Social" value="<?php echo $row['razonsocial']  ?>">
                                <input type="text" class="form-control mb-3" name="nivelatencion" placeholder="Nivel de Atención" value="<?php echo $row['nivelatencion']  ?>">
                                <input type="text" class="form-control mb-3" name="serviciosprestados" placeholder="Servicios Prestados" value="<?php echo $row['serviciosprestados']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>