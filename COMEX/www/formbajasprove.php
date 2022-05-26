<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
require_once("conectar.php");
$codigodeproducto=$_POST['codigodeproducto'];
$result=mysql_query("SELECT * from proveedores where
codigodeproducto= '$codigodeproducto';",$Cxn);
if (mysql_numrows($result)>0)
{
$registro=mysql_fetch_array($result);
}
mysql_free_result($result);
mysql_close($Cxn);
?>
FORMULARIO DE ELIMINACION SI ESTA SEGURO PRESIONE ELIMINAR.<br>
<form name="baja" action="bajaprove.php" method="post">
<table align="left" border="50" bgcolor="#FF3333">
<tr align="right"
<p>
<td>CODIGO DE PROVEEDOR:</td>
<td><input type="text" name="claveproveedor"
value="<?php echo $registro["claveproveedor"]?>"
readonly="readonly"></td>
<br></tr>
<tr align="right">
  <td>CODIGO DEL PRODUCTO:</td>
  <td><input type="text" name="codigodeproducto"
value=<"?php echo $registro["codigodeproducto"]?>
    "
    readonly="readonly"></td>
  <br>
<tr align="right">
  <td>COMPANIA :</td>
  <td><input type="text" name="compania"
value=<"?php echo $registro["compania"]?>
    "
    readonly="readonly"></td>
  <br>
<tr align="right">
  <td>CIUDAD DE ORIGEN:</td>
  <td><input type="text" name="ciudadorigen"
value=<"?php echo $registro["ciudadorigen"]?>
    "
    readonly="readonly"></td>
  <br>
<tr align="right">
  <td>NOMBRE DEL PRODUCTO:</td>
  <td><input type="text" name="nombredelproducto"
value=<"?php echo $registro["nombredelproducto"]?>
    "
    readonly="readonly"></td>
  <br>
<tr align="right">
  <td>TIPO:</td>
  <td><input type="text" name="tipo"
value=<"?php echo $registro["tipo"]?>
    "
    readonly="readonly"></strong></td>
  <br>
<tr align="right">
  <td>CANTIDAD LITROS :</td>
  <td><input type="text" name="cantidadlitros"
value=<"?php echo $registro["cantidadlitros"]?>
    "
    readonly="readonly"></strong></td>
  <br>
<tr align="right">
  <td>CANTIDAD DE PRODUCTO:</td>
  <td><input type="text" name="cantidadproductos"
value=<"?php echo $registro["cantidadproductos"]?>
    "
    readonly="readonly"></strong></td>
  <br>
<tr align="right">
  <td>FECHA:</td>
  <td><input type="text" name="fecha"
value=<"?php echo $registro["fecha"]?>
    "
    readonly="readonly"></strong></td>
</tr>
<td colspan=2 align= center>
  <br><input type="hidden" name="oldDNI"
value="<?php echo $registros["codigo"]?>"><br>
  <input type="submit" name="submit" value="Eliminar"></td>
</table>
</p>
</form>
</body>
</html>

