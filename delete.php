<?php

include("conex.php");
$con = conectar();

$dni_afi=$_GET['id'];

$deleteAfiliado="DELETE FROM afiliado  WHERE dni='$dni_afi'";
$query=mysqli_query($con,$deleteAfiliado);

$deleteCotizante="DELETE FROM cotizante  WHERE dniafiliado='$dni_afi'";
$query2=mysqli_query($con,$deleteCotizante);


    if($query and $query2){
        echo '<script> 
        alert("Cotizante eliminado");
        window.location = "../healthsoft/afiliado.php"
        </script>';
    exit;
    }
?>