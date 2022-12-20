<?php

include("conex.php");
$con = conectar();

$idCot = $_POST['idCotizante'];
$codEmp = $_POST['codEmpresa'];
$salBase = $_POST['salarioBase'];




//Validar si esta
$validar = mysqli_query($con, "SELECT * FROM `cotizante` WHERE `dniafiliado` = '$idCot'");

if($salBase <= 2000000){
    $rango = 'A';
}else if ($salBase <= 5000000){
    $rango = 'B';
} else {
    $rango = 'C';
}
//datos
$insertVin = "INSERT INTO `vinculacion`(`salariobase`, `rangoSalarial`) VALUES ('$salBase','$rango');";

$insertContratoD = " INSERT INTO `contrato`(`estado`, `codvinculacion`, `empresa`, `cotizante`, `fechaVencimiento`) VALUES ('Activo',(SELECT max(numradicadorecibido)  FROM `vinculacion`),'$codEmp','$idCot',date_add(NOW(),interval 30 day));";

$updateCotizante = "UPDATE `cotizante` SET `estadoafiliado`='Activo' WHERE `dniafiliado` = '$idCot'";

if (mysqli_num_rows($validar) > 0) {

    mysqli_autocommit($con, FALSE);
    //query
    mysqli_query($con, $insertVin);
    mysqli_query($con, $insertContratoD);


    //commit
    mysqli_commit($con);

    mysqli_close($con);

    echo '<script> 
        alert("Cotizante vinculado");
        window.location = "../healthsoft/afiliado.php"
        </script>';
    exit;



} else {
    echo '<script> 
        alert("No hay ningun cotizante con ese DNI");
        window.location = "../healthsoft/gestionarContrato.php"
    </script>';
    exit;
}

?>