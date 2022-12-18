<?php
include("conex.php");
$con=conectar();
$archivo = $_FILES["archivo"]["tmp_name"];
$archivo2= fopen($archivo, "r");

$cont =0;
while (($datos = fgetcsv($archivo2, 1000, ",")) == true){
    if($cont!=0){
    $sqlinsert="INSERT INTO `aportes`(`fechapago`, `valorpago`, `cotizante_contrato`, `empresa_contrato`) 
                VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]') ";
    $sqlupdate = "UPDATE `contrato` 
                  SET `estado`='activo',`fechaVencimiento`= date_add('$datos[0]',interval 30 day)
                  WHERE `cotizante` ='$datos[2]' and `empresa`='$datos[3]'";
    $queryinsert=mysqli_query($con,$sqlinsert);
    $queryupdate=mysqli_query($con,$sqlupdate);
    
    }
    $cont++;
}
echo '
    <script> 
        alert("Aportes ingresados correctamente");
        window.location = "/healthsoft/aportes.php"
    </script>';
exit;

?>   