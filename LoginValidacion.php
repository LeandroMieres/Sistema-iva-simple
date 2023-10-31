<?php

include("config/conexion.php");

$usuario = $_POST["Nombre"];
$email = $_POST["Email"];
$contraseña = $_POST["Contraseña"];

$consulta = "SELECT * FROM usuarios WHERE Nombre = ?";
$stmt = $conexion->prepare($consulta);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    $Contra = $fila["Contraseña"];
    
    if($contraseña == $Contra){
        header("Location:Dashboard.php");
        }else{
            echo $contraseña;
            echo "<br>";
            echo $contra;
            echo "Error";
        }
    }else{
        echo "Usuario no encontrado";
    }

    $stmt->close();
    $conexion->close();
?>