<?php

include("conex.php");
$con=conectar();

$fechaPago=$_POST['fechaPago'];
$valorPago=$_POST['valorPago'];
$idCotizante=$_POST['idCotizante'];
$codEmpresa=$_POST['codEmpresa'];


$sqlinsert="INSERT INTO `aportes`(`fechapago`, `valorpago`, `cotizante_contrato`, `empresa_contrato`) 
            VALUES ('$fechaPago','$valorPago','$idCotizante','$codEmpresa') ";
$sqlupdate ="UPDATE `contrato` 
            SET `estado`='activo',`fechaVencimiento`=date_add('$fechaPago',interval 30 day) 
            WHERE `cotizante` ='$idCotizante' and `empresa`='$codEmpresa'";
$queryinsert=mysqli_query($con,$sqlinsert);
$queryupdate=mysqli_query($con,$sqlupdate);

    if($queryinsert and $queryupdate){
        Header("Location: aportes.php");
    }
?>