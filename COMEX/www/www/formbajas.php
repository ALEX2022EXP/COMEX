<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
require_once("conectar.php");
$clave=$_POST['codigo'];
$result=mysql_query("SELECT * from productos where
codigo= '$codigo';",$Cxn);
if (mysql_numrows($result)>0)
{
$registro=mysql_fetch_array($result);
}
mysql_free_result($result);
mysql_close($Cxn);
?>
FORMULARIO DE ELIMINACION SI ESTA SEGURO PRESIONE ELIMINAR.<br>
<form name="baja" action="baja.php" method="post">
<table align="left" border="50" bgcolor="#FF3333">
<tr>
  <td><strong><tr align="right"

    </strong>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<td width="243"><p><strong> CODIGO:
  </strong>
<td><p>&nbsp;</p>
  <p>
    <strong>
    <input type="text" name="codigo"
value="<?php echo $registro["codigo"]?>"
readonly="readonly">
    </strong></p></td>
<td width="244">&nbsp;</td>

<br></tr>
<tr align="right">
<td height="41"><strong>PRECIO:</strong></td>
<td><strong>
  <input type="text" name="precio"
value=<"?php echo $registro["precio"]?>
  "
readonly="readonly"></strong></td>
<br>
<tr align="right">
<td height="41"><strong>DESCRIPCION:</strong></td>
<td><strong>
  <input type="text" name="descripcion"
value=<"?php echo $registro["descripcion"]?>
  "
readonly="readonly"></strong></td>

<br>
<tr align="right">
<td height="45"><strong>COLOR:</strong></td>
<td><strong>
  <input type="text" name="color"
value=<"?php echo $registro["color"]?>
  "
readonly="readonly"></strong></td>
<br>
<tr align="right">
  <td height="53"><strong>CANTIDAD EN LITROS:</strong></td>
  <td><strong>
    <input type="text" name="cantidadlitros"
value=<"?php echo $registro["cantidadlitros"]?>
    "
    readonly="readonly"></strong></td>
  <br>
<tr align="right">
  <td height="41"><strong>CANTIDAD DE PRODUCTOS:</strong></td>
  <td><strong>
    <input type="text" name="cantidadproducto"
value=<"?php echo $registro["cantidadproducto"]?>
    "
    readonly="readonly"></strong></td>
  <br>

<td colspan=2 align= center>
  <br><input type="hidden" name="oldDNI"
value="<?php echo $registros["codigo"]?>"><br>
  <input type="submit" name="submit" value="Eliminar"></td>
</table>
</p>
</form>
</body>
</html>

