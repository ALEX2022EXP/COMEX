<html>
<body>
<?php
require_once("conectar.php");
$codigo=$_POST['codigo'];
$result=mysql_query("SELECT * from productos where
codigo='$codigo';",$Cxn);
if(mysql_numrows($result)>0)
{
$registro=mysql_fetch_array($result);
}
mysql_free_result($result);
mysql_close($Cxn);
?>
formulario de modificacion,
modifique los campos que desee oportunos y 
presione modificar.<br>
<form name="form1" action="modificar.php" method="post">
<table align="left" border="1">
<tr aling="right">
<p>
<td>CODIGO:</td>

<td><input type="text" name="codigo"
value="<?php echo $registro["codigo"]?>"
maxlength="6" readonly="readonly"></td>
<br></tr>

<tr align="right">
<td>PRECIO:</td>
<td><input type="text" name="precio"
value="<?php echo $registro["precio"]?>"></td>
<br>
<tr align="right">
<td>DESCRIPCION:</td>
<td><input type="text" name="descripcion"
value="<?php echo $registro["descripcion"]?>"></td>
<br>
<tr align="right">
  <td>COLOR:</td>
  <td><input type="text" name="color"
value="<?php echo $registro["color"]?>"></td>
  <br>
<tr align="right">
  <td>CANTIDAD EN LITROS:</td>
  <td><input type="text" name="cantidadlitros"
value="<?php echo $registro["cantidadlitros"]?>"></td>
  <br>
<tr align="right">
<td>CANTIDAD DEL PRODUCTO:</td>
<td><input type="text" name="cantidadproducto"
value="<?php echo $registro["cantidadproducto"]?>"></td>
<br>
</tr>
<td colspan=2 align= center>
<br><input type="hidden" name="oldDNI"
value="<?php echo $registros["codigo"] ?>"><br>
<input type="submit" name="submit" value="modificar"></td>

    </table>
</p>
</form>
</body>
</html>

