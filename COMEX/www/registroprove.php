<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>formulario de altas de productos</title>
<style type="text/css">
<!--
h2 {
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	text-align: center;
	color: #0F3;
}
body {
	background-image: url(img/bakkee.jpg);
	background-repeat: no-repeat;
}
table {
	font-weight: bold;
	font-size: 24px;
	color: #F00;
	text-align: left;
}
input {
	text-align: center;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<h2 aling="center">ALMACENA TUS PROVEEDORES</h2>
<hr><br>
<form action="altasprove.php"method="post">
  <table width="623" height="237"border="10" align="center" aling="left">
    <tr aling="right">
      <td width="331">  CLAVE DE PROVEEDOR:</td>
      <td width="258"><input type=text name="claveproveedor" ></td>
    </tr>
    <tr aling="right">
      <td>CODIGO DE PRODUCTO:</td>
      <td><input type=text name="codigodeproducto"></td>
    </tr>
    <tr aling="right">
      <td>COMPANIA:</td>
      <td><input type=text name="compania"></td>
    </tr>
    <tr aling="right">
      <td>CIUDAD DE ORIGEN:</td>
      <td><input type=text name="ciudadorigen"></td>
    </tr>
    <tr aling="right">
      <td>NOMBRE DEL PRODUCTO:</td>
      <td><input type=text name="nombredelproducto"></td>
    </tr>
    <tr aling="right">
      <td>TIPO:</td>
      <td><input type="text" name="tipo" /></td>
    </tr>
    <tr aling="right">
      <td>CANTIDAD EN LITROS:</td>
      <td><input type="text" name="cantidadlitros" /></td>
    </tr>
    <tr aling="right">
      <td>CANTIDAD EN PRODUCTO:</td>
      <td><input type="text" name="cantidadproductos" /></td>
    </tr>
    <tr aling="right">
      <td>FECHA:</td>
      <td><input type=text name="fecha"></td>
    </tr>
    <tr>
      <td colspan=2 aling=center><input type="submit"name="agregar"value="GUARDAR"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
</html>