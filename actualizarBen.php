<?php

include("conex.php");
$con = conectar();

$id = $_GET['id'];


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
$dniCot=$_POST['dniCo'];
$paren=$_POST['parentesco'];



$sql="UPDATE `afiliado` SET `dni`='$dni_afil',`tipodoc`='$t_doc',`nombre`='$nombres',`apellido`='$apellidos',`fNacimiento`='$f_nac',`genero`='$genero',`direccion`='$direccion',`ciudad`='$ciudad',`telefono`='$telefono',`estadocivil`='$estadocivil',`correo`='$correo',`nitips`='$nitips' WHERE `afiliado`.`dni` = '$dni_afil'";
$query=mysqli_query($con,$sql);

$sql2="UPDATE `beneficiario` SET `dnicotizante`='$dniCot',`dniafiliado`='$dni_afil',`parentezco`='$paren'  WHERE `beneficiario`.`dniafiliado` = '$dni_afil'";
$query2=mysqli_query($con,$sql2);

    if($query and $query2){
        Header("Location: beneficiario.php");
    }
?>