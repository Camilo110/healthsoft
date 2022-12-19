<?php

include("conex.php");
$con = conectar();

$nit_ips = $_GET['nit'];

$deleteIPS = "DELETE FROM ips WHERE nit='$nit_ips'";





mysqli_autocommit($con, FALSE);
//query
mysqli_query($con, $deleteIPS);
//commit
mysqli_commit($con);



if ($deleteIPS) {


    echo '<script> 
        alert("IPS eliminada");
        window.location = "../healthsoft/ips.php"
        </script>';
    //Header("Location: ips.php");
    exit;
}

mysqli_close($con);
?>