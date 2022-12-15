<?php
include 'conexion_be.php';
$cod = $_POST['codigo'];
$pass = $_POST['password'];


$validar_login = mysqli_query($conexion, "SELECT * FROM healthsoft.login WHERE usuario ='$cod' and clave = '$pass' and rol = 'a';");

$validar_login2 = mysqli_query($conexion, "SELECT * FROM healthsoft.login WHERE usuario ='$cod';");


if (mysqli_num_rows($validar_login2) > 0) {
    if (mysqli_fetch_array($validar_login2)['rol'] == 'a') {
        if (mysqli_num_rows($validar_login) > 0) {
            header("location: ../panelPpalAdmin.php");
            exit;
        }else {
            echo '<script> 
                alert("Contraseña incorrecta");
                window.location = "../loginAdmin.php"
                </script>';
            exit;
        }

    } else {
        echo '<script> 
            alert("No tiene permisos para ingresar al panel del Administrador");
            window.location = "../loginAdmin.php"
            </script>';
        exit;
    }
} else {
    echo '<script> 
        alert("usuario no existe");
        window.location = "../loginAdmin.php"
    </script>';
    exit;
}

?>