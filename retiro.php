<?php

include("conex.php");
$con = conectar();

$numContrato = $_POST['numContrato'];



//Validar si esta
$validar = mysqli_query($con, "SELECT * FROM `contrato` WHERE `numerocontrato` = '$numContrato'");


//datos
$insertRetiro = "INSERT INTO `retiro`(`numcontrato`) VALUES ('$numContrato')";
$updateContrato = "UPDATE `contrato` SET`estado`='Retirado' WHERE `numcontrato` = '$numContrato'";
$updateCotizante = "UPDATE `cotizante` SET `estadoafiliado`='Retirado' WHERE `dni` = ";


if (mysqli_num_rows($validar) > 0) {
    mysqli_autocommit($con, FALSE);
   //query

   mysqli_query($con, $insertRetiro);
   mysqli_query($con, $updateContrato);
   mysqli_query($con, $updateCotizante);

   //commit
   mysqli_commit($con);

   mysqli_close($con);

   echo '<script> 
       alert("Cotizante retirado");
       window.location = "../healthsoft/afiliado.php"
       </script>';
   exit;


} else {
    echo '<script> 
        alert("No hay ningun contrato con este codigo");
        window.location = "../healthsoft/gestionarContrato.php"
    </script>';
    exit;
}

?>