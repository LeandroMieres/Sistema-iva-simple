<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
</head>
<body>
  <form action="ContribuyentesAltas.php" method="post">

    <label for="">Cuil</label>
    <input type="text" name="Cuil" value=""><br>

    <label for="">Ape_Nom</label>
    <input type="text" name="Ape_Nom" value=""><br>

    <label for="">Resp_Iva</label>
    <input type="text" name="Resp_Iva" value=""><br>

    <label for="">Domicilio</label>
    <input type="text" name="Domicilio" value=""><br>

    <label for="">Localidad</label>
    <input type="text" name="Localidad" value=""><br>

    <input type="submit" value="Editar">
  </form>
</body>
</html><?php
include("config/conexion.php");

$cuit = $_POST["Cuil"];
$ape_nom = $_POST["Ape_Nom"];
$resp_iva = $_POST["Resp_Iva"];
$domicilio = $_POST["Domicilio"];
$localidad = $_POST["Localidad"];

$sql = "INSERT INTO contribuyentes(Cuil, Ape_Nom, Resp_Iva, Domicilio, Localidad)
VALUES ('$cuit','$ape_nom','$resp_iva','$domicilio','$localidad')";
$resultado = $conexion->query($sql);
//Verificar
if($resultado){
    echo "Se Ingreso Correctamente";
    /* header("Location: Contribuyentes.php"); */
}else{
    echo "Intentelo Nuevamente";
}
?>