<?php
$host = "mysql.diariodecodigos.info";
$user = "diariodecodigo03";
$passwd = "onibusca";
$schema = "diariodecodigo03";

$link = mysql_connect($host, $user, $passwd);

if($link){
 mysql_select_db($schema);
 }
?>
