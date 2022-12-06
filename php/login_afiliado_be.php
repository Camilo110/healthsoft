<?php
include 'conexion_be.php';
$cod = $_POST['codigo'];
$pass = $_POST['password'];



$validar_login = mysqli_query($conexion, "SELECT * FROM healthsoft.login WHERE usuario ='$cod' and clave = '$pass' and rol = 'c';");

if(mysqli_num_rows($validar_login) > 0){
    header("location: ../afiliado.php");
    exit;
}else{
    echo '<script> 
        alert("usuario no existe");
        window.location = "../loginAfiliado.php"
    </script>';
    exit;
}
?>