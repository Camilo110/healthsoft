<?php
include 'conexion_be.php';
$cod = $_POST['codigo'];
$pass = $_POST['password'];
echo ' $cod ';


$validar_login = mysqli_query($conexion, "SELECT * FROM healthsoft.logbancos WHERE dni ='$cod' and password = '$pass';");

if(mysqli_num_rows($validar_login) > 0){
    header("location: ../bienvenida.php");
    exit;
}else{
    echo '<script> 
        alert("usuario no existe");
        window.location = "../index.php"
    </script>';
    exit;
}
?>