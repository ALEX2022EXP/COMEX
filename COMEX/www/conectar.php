<?php
$Cxn=mysql_pconnect("localhost","root","") or die(mysql_error($Cxn));
mysql_select_db("comex",$Cxn) or die(mysql_error($Cxn));
?>