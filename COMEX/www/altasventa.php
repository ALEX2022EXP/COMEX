

<html>
<head>
  <title>Guardar un Registro</title>
</head>
<body>
<?php
require_once("conectar.php");
$codigo=$_POST['codigo'];
$fecha=$_POST['fecha'];
$cantidadlitros=$_POST['cantidadlitros'];
$cantidadproducto=$_POST['cantidadproducto'];
$query="insert into venta values(".
"'$codigo',".
"UPPER('$fecha'),".
"UPPER('$cantidadlitros'),".
"'$cantidadproducto')";

mysql_query($query,$Cxn) or die(mysql_error($Cxn));
?>
<h1 aling=center>Se agrego:<?php echo $fecha?>


</body>

</html>