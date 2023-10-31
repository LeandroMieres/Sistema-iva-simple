<?php
include("config/conexion.php");

$cuil = $_GET['Cuil'];

$sql = "DELETE FROM Contribuyentes WHERE Cuil = $cuil";
$resultado = $conexion->query($sql);
if($resultado){
    echo "Se Elimino Correctamente";
    header("Location: Contribuyentes.php");
}else{
    echo "Intentelo Nuevamente";
}
?>