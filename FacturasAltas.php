<?php
$conexion = new mysqli("localhost", "root", "", "sistemaiva");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$Comprobante = $_POST['Comprobante'] ?? null;
$Tipo_Comprobante = $_POST['Tipo_Comprobante'] ?? null;
$Numero = $_POST['Numero'] ?? null;
$Fecha = $_POST['Fecha'] ?? null;
$Id_Contribuyente = $_POST['Id_Contribuyente'] ?? null;
$Neto_21 = $_POST['Neto_21'] ?? null;
$Neto_10_5 = $_POST['Neto_10'] ?? null;
$Neto_27 = $_POST['Neto_27'] ?? null;
$Iva_21 = $_POST['Iva_21'] ?? null;
$Iva_10_5 = $_POST['Iva_10'] ?? null;
$Iva_27 = $_POST['Iva_27'] ?? null;
$Exento = $_POST['Exento'] ?? null;
$No_Gravado = $_POST['No_Gravado'] ?? null;
$Impuestos = $_POST['Impuestos'] ?? null;
$Percepciones = $_POST['Percepciones'] ?? null;
$Retenciones = $_POST['Retenciones'] ?? null;
$Gastos = $_POST['Gastos'] ?? null;
$Total = $_POST['Total'] ?? null;
$Periodo = $_POST['Periodo'] ?? null;
$Signo = $_POST['Signo'] ?? null;
$id_usuario = $_POST['id_usuario'] ?? null;

print_r($_POST);

if ($Comprobante !== null && $Tipo_Comprobante !== null && $Numero !== null && $Fecha !== null && $Id_Contribuyente !== null && $Neto_21 !== null && $Neto_10_5 !== null && $Neto_27 !== null && $Iva_21 !== null && $Iva_10_5 !== null && $Iva_27 !== null && $Exento !== null && $No_Gravado !== null && $Impuestos !== null && $Percepciones !== null && $Retenciones !== null && $Gastos !== null && $Total !== null && $Periodo !== null && $Signo !== null && $id_usuario !== null) {
    $sql = "INSERT INTO ventas (Comprobante, Tipo_Comprobante, Numero, Fecha, Id_Contribuyente, Neto_21, Neto_10, Neto_27, Iva_21, Iva_10, Iva_27, Exento, No_Gravado, Impuestos, Percepciones, Retenciones, Gastos, Total, Periodo, Signo, id_usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssdddddssssssssssss", $Comprobante, $Tipo_Comprobante, $Numero, $Fecha, $Id_Contribuyente, $Neto_21, $Neto_10_5, $Neto_27, $Iva_21, $Iva_10_5, $Iva_27, $Exento, $No_Gravado, $Impuestos, $Percepciones, $Retenciones, $Gastos, $Total, $Periodo, $Signo, $id_usuario);

        if ($stmt->execute()) {
            echo "Inserción exitosa.";
        } else {
            echo "Error en la inserción: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "Faltan datos obligatorios para la inserción.";
}
?>
