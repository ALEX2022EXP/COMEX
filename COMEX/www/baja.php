<?php
require_once("conectar.php");
$codigo=$_POST['codigo'];
$Peticion="DELETE FROM productos where codigo='$codigo';";
$idresult=mysql_query($Peticion,$Cxn);
if($idresult==0)
{
echo"la sentencia no se ha podido ejecutar,<BR>";
echo mysql_error().":".mysql_error()."<BR>";
}
else
{
echo "se ha eliminado un registro<BR>";
}
?>
