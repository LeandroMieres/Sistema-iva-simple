<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
</head>
<body>
  <form action="ContribuyentesModificar.php" method="post">

    <label for="">Ape_Nom</label>
    <input type="text" name="Ape_Nom" value=""><br>

    <!-- <label for="">Resp_Iva</label>
    <input type="text" name="Resp_Iva" value=""><br> -->

    <!-- <label for="">Domicilio</label>
    <input type="text" name="Domicilio" value=""><br> -->

    <!-- <label for="">Localidad</label>
    <input type="text" name="Localidad" value=""><br> -->

    <input type="submit" value="Editar">
  </form>
</body>
</html>

<?php
include("config/conexion.php");

$cuil = $_GET["Cuil"];
$ape_nom = $_POST["Ape_Nom"];/* 
$resp_iva = $_POST["Resp_Iva"];
$domicilio = $_POST["Domicilio"];
$localidad = $_POST["Localidad"]; */

$sql = "UPDATE Contribuyentes SET Ape_Nom='$ape_nom' WHERE Cuil='$cuil'";
/* , Resp_Iva='$resp_iva', Domicilio='$domicilio', Localidad='$localidad' */
$resultado = $conexion->query($sql);
//Verificar
if ($resultado) {
  echo "Se guardo Correctamente";
  /* header("Location: Contribuyentes.php"); */
} else {
  echo "Intentelo Nuevamente";
}
?>