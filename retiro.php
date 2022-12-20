<?php

include("conex.php");
$con = conectar();

$dni = $_POST['dniC'];
$nitE = $_POST['nitE'];



//Validar si esta
$validar = mysqli_query($con, "SELECT * FROM `contrato` WHERE `empresa` = '$nitE' and `cotizante` = '$dni'");


//datos
$insertRetiro = "INSERT INTO `retiro`(`numcontrato`) VALUES ((SELECT `numcontrato` FROM `contrato` WHERE `empresa` = '$nitE' and `cotizante` = '$dni'));";

$updateContrato = "UPDATE `contrato` SET`estado`='Retirado' ,`fechaVencimiento`=NOW() WHERE `empresa` = '$nitE' and `cotizante` = '$dni'";



/*$updateCotizante = "UPDATE `cotizante` SET `estadoafiliado`='Retirado' WHERE `dniafiliado` = (SELECT `cotizante` FROM `contrato` WHERE `numcontrato` = '$numContrato');";*/


if (mysqli_num_rows($validar) > 0) {
    mysqli_autocommit($con, FALSE);
   //query

   mysqli_query($con, $insertRetiro);
   mysqli_query($con, $updateContrato);
  
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