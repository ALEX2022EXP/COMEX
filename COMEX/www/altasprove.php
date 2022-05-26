

<html>
<head>
  <title>Guardar un Registro</title>
</head>
<body>
<?php
require_once("conectar.php");
$claveproveedor=$_POST['claveproveedor'];
$codigodeproducto=$_POST['codigodeproducto'];
$compania=$_POST['compania'];
$ciudadorigen=$_POST['ciudadorigen'];
$nombredelproducto=$_POST['nombredelproducto'];
$tipo=$_POST['tipo'];
$cantidadlitros=$_POST['cantidadlitros'];
$cantidadproductos=$_POST['cantidadproductos'];
$fecha=$_POST['fecha'];
$query="insert into proveedores values(".
"'$claveproveedor',".
"'$codigodeproducto',".
"UPPER('$compania'),".
"UPPER('$ciudadorigen'),".
"UPPER('$nombredelproducto'),".
"UPPER('$tipo'),".
"UPPER('$cantidadlitros'),".
"UPPER('$cantidadproductos'),".
"'$fecha')";


mysql_query($query,$Cxn) or die(mysql_error($Cxn));
?>
<h1 aling=center>Se agrego:<?php echo $compania?>


</body>

</html>