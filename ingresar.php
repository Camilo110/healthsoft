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
$primeraAfi = $_POST['pfa'];
$salario = $_POST['salario'];
$estadoAfil = $_POST['estadoAfi'];
$ranSala = $_POST['ranSal'];

//depen inde
$dOrI = $_POST['status'];
$empresa = $_POST['empresa'];


//Validar si esta
$validar = mysqli_query($con, "SELECT * FROM `afiliado` WHERE `dni` = '$dni_afil'");


//datos

$insertAfi = "INSERT INTO `afiliado`(`dni`, `tipodoc`, `nombre`, `apellido`, `fNacimiento`, `genero`, `direccion`, `ciudad`, `telefono`, `estadocivil`, `correo`, `nitips`) VALUES ('$dni_afil','$t_doc','$nombres','$apellidos','$f_nac','$genero','$direccion','$ciudad','$telefono','$estadocivil','$correo','$nitips');";


$insertCoti ="INSERT INTO `cotizante`(`dniafiliado`, `fecha1afiliacion`, `estadoafiliado`, `salario`, `rangosalarial`) VALUES ('$dni_afil',NOW(),'$estadoAfil','$salario','$ranSala');";


$insertVin = "INSERT INTO `vinculacion`(`salariobase`) VALUES ('$salario');";


$insertContratoD = " INSERT INTO `contrato`(`estado`, `codvinculacion`, `empresa`, `cotizante`, `fechaVencimiento`) VALUES ('Activo',(SELECT max(numradicadorecibido)  FROM `vinculacion`),'$empresa','$dni_afil',date_add(NOW(),interval 30 day));";



$insertContratoI = " INSERT INTO `contrato`(`estado`, `codvinculacion`, `empresa`, `cotizante`, `fechaVencimiento`) VALUES ('Activo',(SELECT max(numradicadorecibido)  FROM `vinculacion`),'$dni_afil','$dni_afil',date_add(NOW(),interval 30 day));";

$insertEmpresa = "INSERT INTO `empresa`(`nit`, `razonsocial`, `ciudad`, `direccion`, `telefono`, `nombrecontacto`) VALUES ('$dni_afil','$nombres','$ciudad','$direccion','$telefono','$nombres')";

$insertLogin = " INSERT INTO `login`(`usuario`, `clave`, `rol`) VALUES ('$dni_afil','$dni_afil','c');";




/*
INSERT INTO `afiliado`(`dni`, `tipodoc`, `nombre`, `apellido`, `fNacimiento`, `genero`, `direccion`, `ciudad`, `telefono`, `estadocivil`, `correo`, `nitips`) VALUES ('$dni_afil','$t_doc','$nombres','$apellidos','$f_nac','$genero','$direccion','$ciudad','$telefono','$estadocivil','$correo','$nitips');
INSERT INTO `cotizante`(`dniafiliado`, `fecha1afiliacion`, `estadoafiliado`, `salario`, `rangosalarial`) VALUES ('$dni_afil','$primeraAfi','$estadoAfil','$salario','$ranSala');
INSERT INTO `vinculacion`(`salariobase`) VALUES ('$salario');
INSERT INTO `contrato`(`estado`, `codvinculacion`, `empresa`, `cotizante`, `fechaVencimiento`) VALUES ('Activo',(SELECT max(numradicadorecibido)  FROM `vinculacion`),'$empresa','$dni_afil',date_add(NOW(),interval 30 day));
INSERT INTO `login`(`usuario`, `clave`, `rol`) VALUES ('$dni_afil','$dni_afil','c');*/




if (mysqli_num_rows($validar) == 0) {
    if ($dOrI == "trabajador") {


        mysqli_autocommit($con, FALSE);

        mysqli_query($con, $insertAfi);
        mysqli_query($con, $insertCoti);
        mysqli_query($con, $insertVin);
        mysqli_query($con, $insertContratoD);
        mysqli_query($con, $insertLogin);

        mysqli_commit($con);

        mysqli_close($con);

        echo '<script> 
        alert("Cotizante dependiente creado");
        window.location = "../healthsoft/afiliado.php"
        </script>';
        exit;

    } else {

        mysqli_autocommit($con, FALSE);

        mysqli_query($con, $insertAfi);
        mysqli_query($con, $insertCoti);
        mysqli_query($con, $insertEmpresa);
        mysqli_query($con, $insertVin);
        mysqli_query($con, $insertContratoI);
        mysqli_query($con, $insertLogin);

        mysqli_commit($con);

        mysqli_close($con);

        echo '<script> 
        alert("Cotizante independiente creado");
        window.location = "../healthsoft/afiliado.php"
        </script>';
        exit;

  
    }


} else {
    echo '<script> 
        alert("Este usuario ya existe");
        window.location = "../healthsoft/afiliado.php"
    </script>';
    exit;
}

?>