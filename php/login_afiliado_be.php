<?php
include 'conexion_be.php';
$cod = $_POST['codigo'];
$pass = $_POST['password'];
echo $cod;



$validar_login = mysqli_query($conexion, "SELECT * FROM healthsoft.login WHERE usuario ='$cod' and clave = '$pass' and rol = 'c';");

$validar_login2 = mysqli_query($conexion, "SELECT * FROM healthsoft.login WHERE usuario ='$cod';");


if (mysqli_num_rows($validar_login2) > 0) {
    if (mysqli_fetch_array($validar_login2)['rol'] == 'c') {
        if (mysqli_num_rows($validar_login) > 0) {
            header("location: ../cotizante_ingreso.php?id=$cod");
            exit;
        }else {
            echo '<script> 
                alert("Contraseña incorrecta");
                window.location = "../loginAfiliado.php"
                </script>';
            exit;
        }

    } else {
        echo '<script> 
            alert("No tiene permisos para ingresar");
            window.location = "../loginAfiliado.php"
            </script>';
        exit;
    }
} else {
    echo '<script> 
        alert("usuario no existe");
        window.location = "../loginAfiliado.php"
    </script>';
    exit;
}

?>