

<html>
<head>
  <title>Guardar un Registro</title>
</head>
<body>
<?php
require_once("conectar.php");
$codigo=$_POST['codigo'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$color=$_POST['color'];
$cantidadlitros=$_POST['cantidadlitros'];
$cantidadproducto=$_POST['cantidadproducto'];
$query="insert into productos values(".
"'$codigo',".

"UPPER('$precio'),".
"UPPER('$descripcion'),".
"'$color',".
"'$cantidadlitros',".
"'$cantidadproducto')";
mysql_query($query,$Cxn) or die(mysql_error($Cxn));
?>
<h1 aling=center>Se agrego:<?php echo $color?>


</body>

</html>