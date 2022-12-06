<?php 
    include("conex.php");
    $con=conectar();



$sql="SELECT * from healthsoft.afiliado";
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
                    <form action="ingresar.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['dni']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                                <input type="text" class="form-control mb-3" name="t_d" placeholder="Tipo de documento">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" >
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" >
                                <input type="text" class="form-control mb-3" name="fnac" placeholder="Fecha de nacimiento" >
                                <input type="text" class="form-control mb-3" name="genero" placeholder="Genero" >
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" >
                                <input type="text" class="form-control mb-3" name="residencia" placeholder="Residencia" >
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" >
                                <input type="text" class="form-control mb-3" name="ecivil" placeholder="Estado Civil" >
                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" >
                                <input type="text" class="form-control mb-3" name="nitips" placeholder="NIT IPS" >
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Afiliar">
                    </form>
                    
                </div>
    </body>
</html>