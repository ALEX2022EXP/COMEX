<html>
<head>
<title>formulario de registros de productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(img/cpmoespin.jpg);
	background-repeat: repeat;
}
h2 {
	color: #69F;
	font-weight: bold;
}
-->
</style></head>
<body>
<h2 aling="center">INTRODUCE LOS DATOS DE TUS PRODUCTOS</h2><hr><br>
<form action="altas.php"method="post">
<table aling="left"border="10">
<tr aling="right">
<td width="260" bgcolor="#999999"><strong>CODIGO:</strong></td>
<td width="144"><input type=text name="codigo" ></td>
</tr>
<tr aling="right">
<td bgcolor="#999999"><strong>PRECIO:</strong></td>
<td><input type=text name="precio"></td>
</tr>
<tr aling="right">
<td bgcolor="#999999"><strong>DESCRIPCION:</strong></td>
<td><input type=text name="descripcion"></td>
</tr>
<tr aling="right">
<td bgcolor="#999999"><strong>COLOR:</strong></td>
<td><input type=text name="color"></td>
</tr>
<tr aling="right">
<td bgcolor="#999999"><strong>CANTIDAD EN LITROS:</strong></td>
<td><input type=text name="cantidadlitros"></td>
</tr>
<tr aling="right">
<td bgcolor="#999999"><strong>CANTIDAD DEL PRODUCTO:</strong></td>
<td><input type=text name="cantidadproducto"></td>
</tr>
<tr>
<td colspan=2 aling=center>
<input type="submit"name="agregar"value="GUARDAR"/></td>
</tr>
</table>
 </form>
</body>
</html>
</html>