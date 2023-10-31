<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="View/Css/ventas.css"> -->
    <title>Formulario</title>
</head>
<body>
    <div class="form-container">
        <form action="FacturasAltas.php" method="post">

            <input type="hidden" name="id">

            <label for="">TIPO DE FACTURA</label>
            <select name="opcion" id="opcion">
                <option value="fc">COMPRA</option>
                <option value="fv">VENTA</option>
            </select>
            <br>

            <label for="">Comprobante</label>
            <select name="opcion" id="opcion">
                <option value="fc">factura</option>
                <option value="rc">Recibo</option>
                <option value="nc">Nota de Credito</option>
                <option value="nd">Nota de debito</option>
            </select>
            <input type="text" name="Comprobante" id="" placeholder=""><br>
            <!-- fact(fc), notac(nc), notad(nc), recibo(rc) -->

            <label for="">Tipo Comprobante</label>
            <select name="opcion" id="opcion">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
            </select>
            <input type="text" name="Tipo_Comprobante" id="" placeholder=" ">
            <br>
            <!-- a, b, c -->

            <label for="">numero comprobante</label>
            <input type="text" name="Numero" id="" placeholder=" ">
            ejemplos: 0001-00014567
            <br>
            <!-- limitar 14 caracteres -->
            <!-- numero comprobante -->
            <!-- ejemplos -->
            <!-- 0001-00014567 -->
            <!-- 0001-00014567-->
            
            <label for="">Fecha</label>
            <input type="date" name="Fecha" id="" placeholder=" "><br>

            <label for="">Contribuyente</label>
            <select name="opcion" id="opcion">
                <option value="cuil">CUIL</option>
                <option value="cuit">CUIT</option>
            </select>
            <input type="number" name="Id_Contribuyente" id="" placeholder=" "><br>
            <!-- mostrar cuil Contribuyente -->
            <!-- select consulta cuil/t db -->

            <label for="">Neto 21%</label>
            <input type="number" name="Neto_21" id="" placeholder=" "><br>

            <label for="">Neto 10,5%</label>
            <input type="number" name="Neto_10" id="" placeholder=" "><br>

            <label for="">Neto 27%</label>
            <input type="number" name="Neto_27" id="" placeholder=" "><br>

            <label for="">IVA 21%</label>
            <input type="number" name="Iva_21" id="" placeholder=" "><br>

            <label for="">IVA 10,5%</label>
            <input type="number" name="Iva_10" id="" placeholder=" "><br>

            <label for="">IVA 27%</label>
            <input type="number" name="Iva_27" id="" placeholder=" "><br>

            <label for="">Exento</label>
            <input type="number" name="Exento" id="" placeholder=" "><br>

            <label for="">No Gravado</label>
            <input type="number" name="No_Grabado" id="" placeholder=" "><br>

            <label for="">Impuestos</label>
            <input type="number" name="Impuestos" id="" placeholder=" "><br>

            <label for="">Percepciones</label>
            <input type="number" name="Percepciones" id="" placeholder=" "><br>

            <label for="">Retenciones</label>
            <input type="number" name="Retenciones" id="" placeholder=" "><br>

            <label for="">Gastos</label>
            <input type="number" name="Gastos" id="" placeholder=" "><br>

            <label for="">Total</label>
            <input type="number" name="Total" id="" placeholder=" "><br>

            <label for="">Periodo</label>
            <input type="number"" name=" Peiodo" id="" placeholder="ingrese mes/año"><br>
            <!-- periodo por fecha -->
            <!-- mes/ año -->

            <!-- <label for="">Signo</label> -->
            <input type="hidden" name="Signo" id="">
            <!-- Validar en JS -->

            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>