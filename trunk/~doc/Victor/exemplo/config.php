<?php
$host = "localhost";
$user = "root";
$passwd = "d25m090";
$schema = "victor";

$link = mysql_connect($host, $user, $passwd);

if($link){
 mysql_select_db($schema);
}


?>
