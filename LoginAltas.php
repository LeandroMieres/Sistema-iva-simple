<?php

include("config/conexion.php");

$id = mysqli_real_escape_string($conexion, $_POST["id"]);
$usuario = mysqli_real_escape_string($conexion, $_POST["Nombre"]);
$correo = mysqli_real_escape_string($conexion, $_POST["Email"]);
$contraseña = mysqli_real_escape_string($conexion, $_POST["Contraseña"]);


$consulta = "INSERT INTO usuarios (id, Nombre, Email, Contraseña) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($consulta);
$stmt->bind_param("ssss", $id, $usuario, $correo ,$contraseña);
$stmt->execute();

$stmt->close();
$conexion->close();

header("Location:Dashboard.php");
