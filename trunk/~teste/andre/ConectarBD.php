<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Onibusca -  Banco de Dados</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<?php
$serverName = "mysql.diariodecodigos.info";
$usuario = "diariodecodigo03";
$senha = "onibusca";
$con = mysql_connect($serverName,$usuario,$senha);
if (!$con){
	echo "Não conectado!";
} else echo "Conectado!";
mysql_close($con);
?>
</body>
</html>