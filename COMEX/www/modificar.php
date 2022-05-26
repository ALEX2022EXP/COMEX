<?php
require_once("conectar.php");
$codigo=$_POST['codigo'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$color=$_POST['color'];
$cantidadlitros=$_POST['cantidadlitros'];
$cantidadproducto=$_POST['cantidadproducto'];
$Peticion="UPDATE productos SET precio=UPPER('$precio'),
descripcion=UPPER('$descripcion'),color='$color',
cantidadlitros='$cantidadlitros',cantidadproducto='$cantidadproducto'
where codigo='$codigo';";
 $idresult=mysql_query ($Peticion,$Cxn);
    if ($idresult==0)
{
echo"la sentencia no se a podido ejecutar.<BR>";
echo mysql_errno().":".mysql_error()."<BR>";
}
else
{
echo "se ha modificado un registro <BR>";
}
?>