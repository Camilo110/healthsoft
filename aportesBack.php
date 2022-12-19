<?php

include("conex.php");
$con=conectar();

$fechaPago=$_POST['fechaPago'];
$valorPago=$_POST['valorPago'];
$idCotizante=$_POST['idCotizante'];
$codEmpresa=$_POST['codEmpresa'];


//validar
$validar = mysqli_query($con, "SELECT * FROM `cotizante` WHERE `dniafiliado` = '$idCotizante'");

//datos

$sqlinsert="INSERT INTO `aportes`(`fechapago`, `valorpago`, `cotizante_contrato`, `empresa_contrato`) 
      VALUES ('$fechaPago','$valorPago','$idCotizante','$codEmpresa') ";
$sqlupdate = "UPDATE `contrato` 
    SET `estado`='activo',`fechaVencimiento`=date_add('$fechaPago',interval 30 day) 
    WHERE `cotizante` ='$idCotizante' and `empresa`='$codEmpresa'";


if (mysqli_num_rows($validar) > 0) {

    mysqli_autocommit($con, FALSE);
    //query
    mysqli_query($con, $sqlinsert);
    mysqli_query($con, $sqlupdate);


    //commit
    mysqli_commit($con);

    mysqli_close($con);

    echo '<script> 
        alert("Aporte registrado");
        window.location = "../healthsoft/aportes.php"
        </script>';
    exit;

}else {
    echo '<script> 
        alert("No hay ningun cotizante con ese DNI");
        window.location = "../healthsoft/aportes.php"
    </script>';
    exit;
}

?>