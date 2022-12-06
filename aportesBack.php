<?php

include("conex.php");
$con=conectar();

$fechPago=$_POST['fechaPago'];
$valorPago=$_POST['valorPago'];
$idCotizante=$_POST['idCotizante'];
$codEmpresa=$_POST['codEmpresa'];


$sql="INSERT INTO `aportes`(`idcotizante`, `codempresa`) VALUES ('$idCotizante','$codEmpresa')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: aportes.php");
    }
?>