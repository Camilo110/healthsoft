<?php

include("conex.php");
$con=conectar();

$nit=$_POST['nit'];
$razon_social=$_POST['razonsocial'];
$nivel_atencion=$_POST['nivelatencion'];
$servicios_prestados=$_POST['serviciosprestados'];


$sql="UPDATE `ips` SET `razonsocial`='$razon_social',`nivelatencion`='$nivel_atencion',`serviciosprestados`='$servicios_prestados' WHERE nit = '$nit'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ips.php");
    }
?>