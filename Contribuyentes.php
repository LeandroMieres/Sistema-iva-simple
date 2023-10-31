<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTRIBUYENTES</title>
</head>

<body>
    <table>
        <tr>
            <th><a href="ContribuyentesAltas.php">Nuevos Contribuyentes</a></th>
    </table>
    <table border="1">
        <thead>
            <tr>
                <th>Cuil</th>
                <th>Ape_Nom</th>
                <th>Resp_Iva</th>
                <th>Domicilio</th>
                <th>Localidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                include("config/conexion.php");
                $sql = "SELECT * FROM Contribuyentes";
                $sel = $conexion->query($sql);
                while ($fila = $sel->fetch_assoc()) { ?>
                    <td><?php echo $fila['Cuil'] ?></td>
                    <td><?php echo $fila['Ape_Nom'] ?></td>
                    <td><?php echo $fila['Resp_Iva'] ?></td>
                    <td><?php echo $fila['Domicilio'] ?></td>
                    <td><?php echo $fila['Localidad'] ?></td>
                    <td><a href="ContribuyentesModificar.php?Cuil=<?php echo $fila['Cuil'] ?>">Editar</a>
                        <a href="ContribuyentesBaja.php?Cuil=<?php echo $fila['Cuil'] ?>">Eliminar</a>
                    </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>

</html>