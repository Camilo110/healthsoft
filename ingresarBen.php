<?php

include("conex.php");
$con = conectar();

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
$dniCoti = $_POST['dniCot'];
$paren = $_POST['Parentesco'];


//Validar datos
$validar = mysqli_query($con, "SELECT * FROM `cotizante` WHERE `dniafiliado` = '$dniCoti'");
$validar2 = mysqli_query($con, "SELECT * FROM `afiliado` WHERE `dni` = '$dni_afil'");



$insertAfiliado = "INSERT INTO `afiliado`(`dni`, `tipodoc`, `nombre`, `apellido`, `fNacimiento`, `genero`, `direccion`, `ciudad`, `telefono`, `estadocivil`, `correo`, `nitips`) VALUES ('$dni_afil','$t_doc','$nombres','$apellidos','$f_nac','$genero','$direccion','$ciudad','$telefono','$estadocivil','$correo','$nitips')";


$insertBeneficiario = "INSERT INTO `beneficiario`(`dnicotizante`, `dniafiliado`, `parentezco`) VALUES ('$dniCoti','$dni_afil','$paren')";




if (mysqli_num_rows($validar2) == 0) {

    if (mysqli_num_rows($validar) > 0) {
        mysqli_autocommit($con, FALSE);

        mysqli_query($con, $insertAfiliado);
        mysqli_query($con, $insertBeneficiario);

        mysqli_commit($con);

        mysqli_close($con);

        echo '<script> 
            alert("Beneficiario creado y vinculado");
            window.location = "../healthsoft/beneficiario.php"
            </script>';
        exit;
    } else {
        echo '<script> 
        alert("Este cotizante no existe");
        window.location = "../healthsoft/beneficiario.php"
    </script>';
        exit;
    }


} else {
    echo '<script> 
        alert("Este beneficiario ya existe");
        window.location = "../healthsoft/beneficiario.php"
    </script>';
    exit;
}



?>