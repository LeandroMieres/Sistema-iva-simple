<!DOCTYPE html>
<html>
<head>
    <title>Facturas Ventas</title>
</head>
<body>
    <h1>Facturas Ventas</h1>
    <form action="FacturasAltas.php" method="post">
        <label for="Comprobante">Comprobante:</label>
        <input type="text" name="Comprobante" id="Comprobante" required><br>

        <label for="Tipo_Comprobante">Tipo Comprobante:</label>
        <input type="text" name="Tipo_Comprobante" id="Tipo_Comprobante" required><br>

        <label for="Numero">Número de Comprobante:</label>
        <input type="text" name="Numero" id="Numero" required><br>

        <label for="Fecha">Fecha:</label>
        <input type="date" name="Fecha" id="Fecha" required><br>

        <label for="Id_Contribuyente">ID de Contribuyente:</label>
        <input type="number" name="Id_Contribuyente" id="Id_Contribuyente" required><br>

        <label for="Neto_21">Neto 21%:</label>
        <input type="number" name="Neto_21" id="Neto_21" step="0.01" required><br>

        <label for="Neto_10_5">Neto 10,5%:</label>
        <input type="number" name="Neto_10" id="Neto_10" step="0.01" required><br>

        <label for="Neto_27">Neto 27%:</label>
        <input type="number" name="Neto_27" id="Neto_27" step="0.01" required><br>

        <label for="Iva_21">IVA 21%:</label>
        <input type="number" name="Iva_21" id="Iva_21" step="0.01" required><br>

        <label for="Iva_10_5">IVA 10,5%:</label>
        <input type="number" name="Iva_10" id="Iva_10" step="0.01" required><br>

        <label for="Iva_27">IVA 27%:</label>
        <input type="number" name="Iva_27" id="Iva_27" step="0.01" required><br>

        <label for="Exento">Exento:</label>
        <input type="number" name="Exento" id="Exento" step="0.01" required><br>

        <label for="No_Gravado">No Gravado:</label>
        <input type="number" name="No_Gravado" id="No_Gravado" step="0.01" required><br>

        <label for="Impuestos">Impuestos:</label>
        <input type="number" name="Impuestos" id="Impuestos" step="0.01" required><br>

        <label for="Percepciones">Percepciones:</label>
        <input type="number" name="Percepciones" id="Percepciones" step="0.01" required><br>

        <label for="Retenciones">Retenciones:</label>
        <input type="number" name="Retenciones" id="Retenciones" step="0.01" required><br>

        <label for="Gastos">Gastos:</label>
        <input type="number" name="Gastos" id="Gastos" step="0.01" required><br>

        <label for="Total">Total:</label>
        <input type="number" name="Total" id="Total" step="0.01" required><br>

        <label for="Periodo">Período (mes/año):</label>
        <input type="text" name="Periodo" id="Periodo" required><br>

        <label for="Signo">Signo (1 o -1):</label>
        <input type="number" name="Signo" id="Signo" required><br>

        <label for="id_usuario">ID de Usuario:</label>
        <input type="number" name="id_usuario" id="id_usuario" required><br>

        <input type="submit" name="submit" value="Insertar">
    </form>
</body>
</html>
