<?php

include("conex.php");
$con=conectar();

$codigo=$_POST['codigo'];
$descripcion=$_POST['servicio'];
$diagnostico=$_POST['diagnostico'];
$fecha=$_POST['fecha'];
$dni=$_POST['dni'];
$nit=$_POST['nit'];
$medico=$_POST['medico'];

$sqlorden="INSERT INTO `ordendeservicio`(`fecha`, `nombremedico`, `diagnostico`, `nitips`, `nitafiliado`) VALUES 
        ('$fecha','$medico','$diagnostico','$nit','$dni')";
$sqldesc = "INSERT INTO `descripcionservicios`( `descripcion`, `cod_orden`) VALUES ('$descripcion',(SELECT MAX(codigo)
            FROM `ordendeservicio`))";

$queryorden=mysqli_query($con,$sqlorden);
$querydesc=mysqli_query($con,$sqldesc);

    if($queryorden and $querydesc){
        Header("Location: registrarOrdenes.php");
    }
?>