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
	background-image: url(img/barricas.jpg);
	background-repeat: repeat;
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
<h2 aling="center">REGISTRA TUS VENTAS</h2><hr><br>
<form action="altasventa.php"method="post">
  <table width="623" height="237"border="10" align="center" aling="left">
    <tr aling="right">
      <td width="331">  CODIGO:</td>
      <td width="258"><input type=text name="codigo" ></td>
    </tr>
    <tr aling="right">
      <td>FECHA:</td>
      <td><input type=text name="fecha"></td>
    </tr>
    <tr aling="right">
      <td>CANTIDAD EN LITROS:</td>
      <td><input type=text name="cantidadlitros"></td>
    </tr>
    <tr aling="right">
      <td>CANTIDAD DEL PRODUCTO:</td>
      <td><input type=text name="cantidadproducto"></td>
    </tr>
    <tr>
      <td colspan=2 aling=center><input type="submit"name="agregar"value="GUARDAR"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p><img src="img/boteess.jpg" width="228" height="264" align="middle"></p>
</form>
</body>
</html>
</html>