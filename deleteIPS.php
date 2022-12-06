<?php

include("conex.php");
$con = conectar();

$nit_ips=$_GET['nit'];

$sql="DELETE FROM ips WHERE nit='$nit_ips'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ips.php");
    }
?>