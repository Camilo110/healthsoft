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


$sql="INSERT INTO `ordendeservicio`(`codigo`, `fecha`, `nombremedico`, `diagnostico`, `descpservicio`, `nitips`, `nitafiliado`, `trial674`) VALUES 
('$codigo','$fecha','$medico','$diagnostico','$descripcion','$nit','$dni','[value-8]')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registrarOrdenes.php");
    }
?>