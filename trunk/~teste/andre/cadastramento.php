<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Onibusca -  Banco de Dados</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<div id="wrap">
<div class="header">
	<div class="title">
		<h1><a href="#">Cadastro</a></h1>
	</div>
	<div class="nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="sobre.html">Sobre Nós</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<?php
$serverName = "mysql.diariodecodigos.info";
$usuario = "diariodecodigo03";
$senha = "onibusca";
$database = "diariodecodigo03";
$con = mysql_connect($serverName,$usuario,$senha);

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

if ($_POST[sexo] == "Homem")
{
	$sexo = "1";
}
elseif ($_POST[sexo] == "Mulher")
{
	$sexo = "2";
}

$_Data = $_POST[ano]."-".$_POST[mes]."-".$_POST[dia];

mysql_select_db($database, $con);

$sql = "SELECT LOGIN from TB_PASSAGEIRO where LOGIN = '$_POST[login]';";

$result = mysql_query($sql);

if (!$result)
  {
    die('Error: ' . mysql_error());
  }

$rows = mysql_num_rows($result);

if ($rows>0)
  {
    echo "<div class='page'>Já existe cadastro com esse login, tente outro!</div>";
    die();
  }

$sql = "INSERT INTO TB_PASSAGEIRO (LOGIN, SENHA, NOME, SEXO, DT_NASCIMENTO, DT_CADASTRO, UF, CIDADE) VALUES ('$_POST[login]','$_POST[senha]','$_POST[nome]', $sexo, '$_Data', CURDATE(), '$_POST[uf]', '$_POST[cidade]');";

if (!mysql_query($sql,$con))
  {
    die('Error: ' . mysql_error());
  }

$to = "esonibusca@gmail.com";
$subject = "Cadastro Onibusca";
$message = "Cadastro do usuário: $_POST[nome], $_POST[sexo], $_POST[uf], $_POST[cidade]. Efetuado com sucesso no Onibusca.";
$from = "onibusca";
$headers = "From: $from";
mail($to,$subject,$message,$headers);  

echo "<div class='page'>Seu cadastro foi efetuado em nosso sistema.</div>";
  
mysql_close($con);

?>
</body>
</html>