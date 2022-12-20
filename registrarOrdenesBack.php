<?php

include("conex.php");
$con = conectar();


$descripcion = $_POST['servicio'];
$diagnostico = $_POST['diagnostico'];
$fecha = $_POST['fecha'];
$dni = $_POST['dni'];
$nit = $_POST['nit'];
$medico = $_POST['medico'];

$sqlorden = "INSERT INTO `ordendeservicio`(`fecha`, `nombremedico`, `diagnostico`, `nitips`, `nitafiliado`) VALUES 
        ('$fecha','$medico','$diagnostico','$nit','$dni')";
$sqldesc = "INSERT INTO `descripcionservicios`( `descripcion`, `cod_orden`) VALUES ('$descripcion',(SELECT MAX(codigo)
            FROM `ordendeservicio`))";




//Verificar 
//Verifica si es afiliado
$validar = mysqli_query($con, "SELECT * FROM `afiliado` WHERE `dni` = '$dni'");
//Verifica si es cotizante
$validar2 = mysqli_query($con, "SELECT * FROM `cotizante` WHERE `dniafiliado` = '$dni'");
//Verifica si el cotizante del beneficiario esta activo


$validar3 = mysqli_query($con, "SELECT * 
FROM `cotizante` inner join `beneficiario` on `cotizante`.`dniafiliado` = `beneficiario`.`dnicotizante`
inner join `contrato` on `cotizante`.`dniafiliado` = `contrato`.`cotizante`
where `contrato`.`estado` = 'Activo' and `beneficiario`.`dniafiliado` = '$dni';");


//Verifica si el cotizante esta activo
$validar4 = mysqli_query($con, "SELECT * 
FROM `contrato`
where `contrato`.`cotizante` = '$dni' and `contrato`.`estado` = 'Activo';");

if (mysqli_num_rows($validar) > 0) {
    if (mysqli_num_rows($validar2) > 0) {
        if (mysqli_num_rows($validar4) > 0) {
            mysqli_query($con, $sqlorden);
            mysqli_query($con, $sqldesc);


            echo '<script> 
            alert("Se realizo la orden");
            window.location = "../healthsoft/registrarOrdenes.php"
        </script>';
            exit;

        } else {
            echo '<script> 
                alert("Este cotizante no está activo");
                window.location = "../healthsoft/registrarOrdenes.php"
            </script>';
            exit;
        }

    } else {
        if (mysqli_num_rows($validar3) > 0) {
            mysqli_query($con, $sqlorden);
            mysqli_query($con, $sqldesc);

            echo '<script> 
            alert("Se realizo la orden");
            window.location = "../healthsoft/registrarOrdenes.php"
        </script>';
            exit;
        } else {
            echo '<script> 
                alert("Este cotizante no está activo");
                window.location = "../healthsoft/registrarOrdenes.php"
            </script>';
            exit;
        }
    }

} else {
    echo '<script> 
        alert("Este afiliado no existe");
        window.location = "../healthsoft/registrarOrdenes.php"
    </script>';
    exit;
}
//
?>