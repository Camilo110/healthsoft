<?php

include("conex.php");
$con = conectar();

$dni_afi=$_GET['id'];

$sql="DELETE FROM afiliado  WHERE dni='$dni_afi'";
$query=mysqli_query($con,$sql);

$sql2="DELETE FROM `beneficiario` WHERE dniafiliado='$dni_afi'";
$query2=mysqli_query($con,$sql2);

    if($query and $query2){
        Header("Location: beneficiario.php");
    }
?>