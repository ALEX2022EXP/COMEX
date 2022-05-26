<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
require_once("conectar.php");
$codigo=$_POST['codigo'];
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
<tr align="right"
<p>
<td>CODIGO:</td>
<td><input type="text" name="codigo"
value="<?php echo $registro["codigo"]?>"
readonly="readonly"></td>
<br></tr>
<tr align="right">
<td>PRECIO:</td>
<td><input type="text" name="precio"
value=<"?php echo $registro["precio"]?>"
readonly="readonly"></td>
<br>
<tr align="right">
<td>DESCRIPCION:</td>
<td><input type="text" name="descripcion"
value=<"?php echo $registro["descripcion"]?>"
readonly="readonly"></td>
<br>
<tr align="right">
<td>COLOR:</td>
<td><input type="text" name="color"
value=<"?php echo $registro["color"]?>"
readonly="readonly"></td>
<br>
<tr align="right">
<td>CANTIDAD EN LITROS:</td>
<td><input type="text" name="cantidadlitros"
value=<"?php echo $registro["cantidadlitros"]?>"
readonly="readonly"></strong></td>
<br>
<tr align="right">
<td>CANTIDAD DE PRODUCTOS:</td>
<td><input type="text" name="cantidadproducto"
value=<"?php echo $registro["cantidadproducto"]?>"
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

