<?php
include("config/conexion.php");
$cuil = $_POST["Cuil"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
</head>
<body>
    <h2>Búsqueda por CUIL</h2>
    <form action="ContribuyentesBuscar.php" method="post">
        <label for="cuil">CUIL:</label>
        <input type="text" name="Cuil" id="cuil">
        <input type="submit" value="Buscar">
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Cuil</th>
                <th>Ape_Nom</th>
                <th>Resp_Iva</th>
                <th>Domicilio</th>
                <th>Localidad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $sql = "SELECT * FROM Contribuyentes WHERE cuil = '$cuil'";
                $sel = $conexion->query($sql);
                while ($fila = $sel->fetch_assoc()) { ?>
                    <td><?php echo $fila['Cuil'] ?></td>
                    <td><?php echo $fila['Ape_Nom'] ?></td>
                    <td><?php echo $fila['Resp_Iva'] ?></td>
                    <td><?php echo $fila['Domicilio'] ?></td>
                    <td><?php echo $fila['Localidad'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>

</html>