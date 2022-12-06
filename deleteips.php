<?php

include("conex.php");
$con = conectar();

$nit=$_GET['nit'];

$sql="DELETE FROM empresa  WHERE nit='$nit'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empresa.php");
    }
?>