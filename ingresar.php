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


$sql="INSERT INTO `afiliado`(`dni`, `tipodoc`, `nombre`, `apellido`, `fNacimiento`, `genero`, `direccion`, `ciudad`, `telefono`, `estadocivil`, `correo`, `nitips`) VALUES ('$dni_afil','$t_doc','$nombres','$apellidos','$f_nac','$genero','$direccion','$ciudad','$telefono','$estadocivil','$correo','$nitips')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: bienvenida.php");
    }
?>