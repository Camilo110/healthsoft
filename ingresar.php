<?php

include("conex.php");
$con=conectar();

$dni_afil=$_POST['dni'];
$t_doc=$_POST['t_d'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$f_nac=$_POST['fnac'];
$genero=$_POST['genero'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['residencia'];
$telefono=$_POST['telefono'];
$estadocivil=$_POST['ecivil'];
$correo=$_POST['correo'];
$nitips=$_POST['nitips'];
//Cotizante
$primeraAfi=$_POST['pfa'];
$salario=$_POST['salario'];
$estadoAfil=$_POST['estadoAfi'];
$ranSala=$_POST['ranSal'];


$sql="INSERT INTO `afiliado`(`dni`, `tipodoc`, `nombre`, `apellido`, `fNacimiento`, `genero`, `direccion`, `ciudad`, `telefono`, `estadocivil`, `correo`, `nitips`) VALUES ('$dni_afil','$t_doc','$nombres','$apellidos','$f_nac','$genero','$direccion','$ciudad','$telefono','$estadocivil','$correo','$nitips')";
$query=mysqli_query($con,$sql);

$sql2 = "INSERT INTO `cotizante`(`dniafiliado`, `fecha1afiliacion`, `estadoafiliado`, `salario`, `rangosalarial`) VALUES ('$dni_afil','$primeraAfi','$estadoAfil','$salario','$ranSala')";
$query2=mysqli_query($con,$sql2);


    if($query and $query2){
        Header("Location: afiliado.php");
    }
?>