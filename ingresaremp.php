<?php

include("conex.php");
$con = conectar();

$nit = $_POST['nit'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$contacto = $_POST['contacto'];
$razonsocial = $_POST['razonsocial'];
$telefono = $_POST['telefono'];


//validar 
$validar = mysqli_query($con, "SELECT * FROM `empresa` WHERE `nit`='$nit'");

$insertEmp = "INSERT INTO `empresa`(`nit`, `ciudad`, `direccion`, `nombrecontacto`, `razonsocial`, `telefono`) VALUES ('$nit','$ciudad','$direccion','$contacto','$razonsocial','$telefono')";



if (mysqli_num_rows($validar) == 0) {
    mysqli_autocommit($con, FALSE);

    mysqli_query($con, $insertEmp);

    mysqli_commit($con);

    mysqli_close($con);

    echo '<script> 
        alert("Empresa creada con éxito");
        window.location = "../healthsoft/empresa.php"
        </script>';
    exit;

}else {
    echo '<script> 
    alert("Esta empresa ya existe");
    window.location = "../healthsoft/beneficiario.php"
</script>';
    exit;
}

?>