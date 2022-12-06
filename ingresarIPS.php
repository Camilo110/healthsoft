<?php

include("conex.php");
$con=conectar();

$nit_ips=$_POST['nit'];
$razon_social=$_POST['razonsocial'];
$nivel_atencion=$_POST['nivelatencion'];
$servicios_prestados=$_POST['serviciosprestados'];


$sql="INSERT INTO `ips`(`nit`, `razonsocial`, `nivelatencion`, `serviciosprestados`) 
        VALUES ('$nit_ips','$razon_social','$nivel_atencion','$servicios_prestados')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ips.php");
    }
?>