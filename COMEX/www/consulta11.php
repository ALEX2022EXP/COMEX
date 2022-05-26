
<html>
<head>
<title>
CONSULTA
</title>
</head>
<body>
<?php
require_once("conectar.php");
$result=mysql_query("select * from productos where precio like '%".$_POST['precio']."%'");
for($i=0;$i<mysql_numrows($result);$i++)
{
	$codigo=mysql_result($result,$i,0);
	$precio=mysql_result($result,$i,1);
	$descripcion=mysql_result($result,$i,2);
	$color=mysql_result($result,$i,3);
	$cantidadlitros=mysql_result($result,$i,4);
    $cantidadproducto=mysql_result($result,$i,5);
	echo $clave."-".$codigo."-".$precio."-".$descripcion."-".$color."-".$cantidadlitros."-".$cantidadproducto."-"."<BR>";
}
?>

</body>
</html>