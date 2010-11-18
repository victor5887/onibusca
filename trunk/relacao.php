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
		<h2><?php echo "Bem vindo " . $_COOKIE["usuarioNome"]; ?><h2>
	</div>
	<div class="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="sobre.html">Sobre Nós</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>


	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
			
				<!--Div de conteudo da Home-->
				<div class="content">
					
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

							$_Data = $_POST[ano]."-".$_POST[mes]."-".$_POST[dia];

							mysql_select_db($database, $con);

							$sql = "SELECT ENDERECO, NOM_BAIRRO
							FROM TB_PONTO AS A, TB_PASSAGEIRO_PONTO AS B 
							WHERE A.ID = B.ID_PONTO AND
							B.ID_PASSAGEIRO = " . $_COOKIE["usuarioID"];

							$result = mysql_query($sql);

							if (!$result)
							  {
								die('Error: ' . mysql_error());
							  }

							$rows = mysql_num_rows($result);

							echo "<h2>Seus pontos cadastrados são:</h2> <br /> <br />";

							if ($rows != 0) {
								echo ("	<table>");
								for($i=0;$i<$rows;$i++)	{
									echo ("	<tr>																	");
									echo ("		<td><".  mysql_result($result, $i, "ENDERECO") ."</td>		");
									echo ("		<td>".  mysql_result($result, $i, "NOM_BAIRRO") ."</td>		");
									echo ("	</tr>																	");
								}
								echo ("	</table>");
							} else echo "Nenhum Ponto Cadastrado.";
							  
							mysql_close($con);

						?>
					
					
				</div>
				
				
				
				<div class="sidebar">	
					<h4>Tempo</h4>
						<iframe src='http://selos.climatempo.com.br/selos/MostraSelo.php?
						CODCIDADE=321&SKIN=azul'
						scrolling='no' frameborder='0' 			
						width='150' height='170' marginheight='0' marginwidth='0'></iframe>
					
					<h4>Search</h4>
					<form action="#" method="get" class="searchform">
						<p>
							<input type="text" id="searchq" name="q" />
							<input type="submit" class="formbutton" value="Search" />
						</p>
					</form>
			
				</div>
				
				<div class="footer">
					<p><a href="http://validator.w3.org/check/referer" title="valid XHTML">XHTML</a> | 
					<a href="http://jigsaw.w3.org/css-validator/check/referer" title="valid CSS">CSS</a> 
					| Design: <a href="http://www.spyka.net">spyka webmaster</a> |
					<a href="http://www.justfreetemplates.com">Free Web Templates</a></p> 
				</div>
			</div>
		</div>
	</div>







</body>
</html>