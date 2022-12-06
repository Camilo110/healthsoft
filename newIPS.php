<?php 
    include("conex.php");
    $con=conectar();



$sql="SELECT * from healthsoft.ips";
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
                    <form action="ingresarIPS.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['nit']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nit" placeholder="nit">
                                <input type="text" class="form-control mb-3" name="razonsocial" placeholder="razon social">
                                <input type="text" class="form-control mb-3" name="nivelatencion" placeholder="Nivel de Atención" >
                                <input type="text" class="form-control mb-3" name="serviciosprestados" placeholder="Servicios Prestados" >
                                
                            <input type="submit" class="btn btn-primary btn-block" value="AfiliarIPS">
                    </form>
                    
                </div>
    </body>
</html>