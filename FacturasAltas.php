<?php

include("config/conexion.php");

$opcion = $_POST["opcion"];

$sql = "INSERT INTO Ventas (Comprobante,Tipo_Comprobante) VALUES ($opcion)";
$stmt = $conexion->prepare($query);
$stmt->execute();

$Comprobante = $_POST['Comprobante'];
$Tipo_Comprobante = $_POST['Tipo_Comprobante'];
$Numero = $_POST['Numero'];
$Fecha = $_POST['Fecha'];
$Id_Contribuyente = $_POST['Id_Contribuyente'];
$Neto_21 = $_POST['Neto_21'];
$Neto_10 = $_POST['Neto_10'];
$Neto_27 = $_POST['Neto_27'];
$Iva_21 = $_POST['Iva_21'];
$Iva_10 = $_POST['Iva_10'];
$Iva_27 = $_POST['Iva_27'];
$Exento = $_POST['Exento'];
$No_Grabado = $_POST['No_Grabado'];
$Impuestos = $_POST['Impuestos'];
$Percepciones = $_POST['Percepciones'];
$Retenciones = $_POST['Retenciones'];
$Gastos = $_POST['Gastos'];
$Total = $_POST['Total'];
$Periodo = $_POST['Periodo'];
$Signo = $_POST['Signo'];
$id_usuario= $_POST['id_usuario'];


$sql = "INSERT INTO ventas (Comprobante, , Numero, Fecha, Id_Contribuyente, Neto_21, Neto_10, Neto_27, Iva_21, Iva_10, Iva_27, Exento, No_Gravado, Impuestos, Percepciones, Retenciones, Gastos, Total, Periodo, Signo, id_usuario)
        VALUES ($Comprobante,$Tipo_Comprobante,$Numero,$Fecha,$Id_Contribuyente,$Neto_21,$Neto_10,$Neto_27,$Iva_21,$Iva_10,$Iva_27,$Exento,$No_Grabado,$Impuestos,$Percepciones,$Retenciones,$Gastos,$Total,$Periodo,$Signo, $id_usuario)";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    $resultados = $resultado->fetch_assoc();

} else {

}

  




?>
