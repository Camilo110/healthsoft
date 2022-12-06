<?php
include 'conexion_be.php';
$cod = $_POST['codigo'];
$pass = $_POST['password'];
echo ' $cod ';


$validar_login = mysqli_query($conexion, "SELECT * FROM healthsoft.login WHERE usuario ='$cod' and clave = '$pass' and rol = 'a';");

if(mysqli_num_rows($validar_login) > 0){
    header("location: ../panelPpalAdmin.php");
    exit;
}else{
    echo '<script> 
        alert("usuario no existe");
        window.location = "../loginAdmin.php"
    </script>';
    exit;
}
?>