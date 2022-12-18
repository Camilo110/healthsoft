<?php

include("conex.php");
$con = conectar();

$id = $_GET['id'];


$dni_afil = $_POST['dni'];
$t_doc = $_POST['t_d'];
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$f_nac = $_POST['fnac'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['residencia'];
$telefono = $_POST['telefono'];
$estadocivil = $_POST['ecivil'];
$correo = $_POST['correo'];
$nitips = $_POST['nitips'];
//Cotizante
$primeraAfi = $_POST['pfa'];
$salario = $_POST['salario'];
$estadoAfil = $_POST['estadoAfi'];
$ranSala = $_POST['ranSal'];

//depen inde
$dOrI = $_POST['status'];
$empresa = $_POST['empresa'];






$sql = "UPDATE `afiliado` SET `dni`='$dni_afil',`tipodoc`='$t_doc',`nombre`='$nombres',`apellido`='$apellidos',`fNacimiento`='$f_nac',`genero`='$genero',`direccion`='$direccion',`ciudad`='$ciudad',`telefono`='$telefono',`estadocivil`='$estadocivil',`correo`='$correo',`nitips`='$nitips' WHERE `afiliado`.`dni` = '$dni_afil'";
$query = mysqli_query($con, $sql);

$sql2 = "UPDATE `cotizante` SET `dniafiliado`='$dni_afil',`fecha1afiliacion`='$primeraAfi',`estadoafiliado`='$estadoAfil',`salario`='$salario',`rangosalarial`='$ranSala' WHERE `cotizante`.`dniafiliado` = '$dni_afil'";
$query2 = mysqli_query($con, $sql2);



if($dOrI == "trabajador"){
    $sqlD = "INSERT INTO `labora`(`nitempresa`, `dnidependiente`) VALUES ('$empresa','$dni_afil')";
    $query4 = mysqli_query($con, $sqlD);
}else
{
$sqlI = "INSERT INTO `empresa`(`nit`, `razonsocial`, `ciudad`, `direccion`, `telefono`, `nombrecontacto`) VALUES ('$dni_afil','$nombres','$ciudad','$direccion','$telefono','$nombres')";
    $query3=mysqli_query($con,$sqlI);
}


if ($query and $query2) {
    Header("Location: afiliado.php");
}
?>