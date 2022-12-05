<?php

include("conex.php");
$con = conectar();

$dni_afi=$_GET['id'];

$sql="DELETE FROM afiliado  WHERE dni='$dni_afi'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: bienvenida.php");
    }
?>