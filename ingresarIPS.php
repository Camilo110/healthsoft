<?php

include("conex.php");
$con=conectar();

$nit_ips=$_POST['nit'];
$razon_social=$_POST['razonsocial'];
$nivel_atencion=$_POST['nivelatencion'];
$servicios_prestados=$_POST['serviciosprestados'];



//validar
$validar = mysqli_query($con, "SELECT * FROM `ips` WHERE `nit` = '$nit_ips'");

//datos
$insertIPS="INSERT INTO `ips`(`nit`, `razonsocial`, `nivelatencion`, `serviciosprestados`) 
        VALUES ('$nit_ips','$razon_social','$nivel_atencion','$servicios_prestados')";




if (mysqli_num_rows($validar) == 0) {

    mysqli_autocommit($con, FALSE);
    //query
    mysqli_query($con, $insertIPS);
    //commit
    mysqli_commit($con);

    mysqli_close($con);

    echo '<script> 
        alert("IPS registrada");
        window.location = "../healthsoft/ips.php"
        </script>';
    exit;


}else {
    echo '<script> 
        alert("Esta IPS ya se encuentra registrada");
        window.location = "../healthsoft/ips.php"
    </script>';
    exit;
}








$sql="INSERT INTO `ips`(`nit`, `razonsocial`, `nivelatencion`, `serviciosprestados`) 
        VALUES ('$nit_ips','$razon_social','$nivel_atencion','$servicios_prestados')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ips.php");
    }
?>