<?php

    $conexion = mysqli_connect("localhost", "root", "", `healthsoft`);

    if ($conexion) {
        echo 'conectado a la base de datos';
    } else {
        echo 'no se ha podido conectar a la bd';
    }


?>