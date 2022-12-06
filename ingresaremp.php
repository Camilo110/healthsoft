<?php

include("conex.php");
$con=conectar();

$nit=$_POST['nit'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$contacto=$_POST['contacto'];
$razonsocial=$_POST['razonsocial'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO `empresa`(`nit`, `ciudad`, `direccion`, `nombrecontacto`, `razonsocial`, `telefono`) VALUES ('$nit','$ciudad','$direccion','$contacto','$razonsocial','$telefono')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empresa.php");
    }
?>