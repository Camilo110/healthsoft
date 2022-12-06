<?php

include("conex.php");
$con=conectar();

$nit=$_POST['nit'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$contacto=$_POST['contacto'];
$razonsocial=$_POST['razonsocial'];
$telefono=$_POST['telefono'];


$sql="UPDATE `empresa` SET `ciudad`='$ciudad',`direccion`='$direccion',`nombrecontacto`='$contacto',`razonsocial`='$razonsocial',`telefono`='$telefono' WHERE nit = '$nit'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empresa.php");
    }
?>