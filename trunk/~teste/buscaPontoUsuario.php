<?php
//ARQUIVO QUE REALISA A CONEXÃO COM O BANCO DE DADOS
require_once "config.php";

// recebe por GET ou POST
$termo = $_REQUEST['termo'];

// CRIA A QUERY DE BUSCA
$sql = "SELECT * FROM TB_PASSAGEIRO WHERE NOME LIKE '%$termo%'";

// EXECUTA A QUERY
$result = mysql_query($sql) or die("Error: ". mysql_error(). " with query ". $query);

// PEGA O RESULTADO
$rows = mysql_num_rows($result);

//cria um cookie para ser usado no futuro...  http://www.w3schools.com/php/php_cookies.asp
setcookie("user", $lstResult, time()+3600);

?>

<!DOCTYPE table PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
</head>

<body>

	
	<?php $idUsuario = $_COOKIE["usuarioID"]; //$_POST["PAS"]; //obtem um id do usuário, deverá ser obtido por uma var de login

	
	if ($idUsuario != '') 
	{
		echo "<p>Esse foi id do usuário selecionado da ultima vez.." . $idUsuario . "</p>";
		
		$sql = "SELECT * FROM TB_PONTO AS P INNER JOIN RL_PASSAGEIRO_PONTO AS PP where P.ID = PP.ID_PONTO and ID_PASSAGEIRO = " . $idUsuario;
		$result = mysql_query($sql) or die("Error: ". mysql_error(). " with query ". $query);
		$rows = mysql_num_rows($result);
		
		
		
		?>
		
		<form action="buscaPontoUsuario.php" method="post">
			Click nessa parada para esquecer o usuário: <input type="submit" value="" name="PAS"/>
		</form>
		<br/>
		<div>teste1...</div>
		<div>
			teste2<br/>
			<form action="cadastraPonto.php" method="post">
				Click nessa parada para cadastar mais pontos ao usuário: <input type="submit" value="<?php echo $idUsuario ;?>" name="PAS"/>
			</form>
		</div>
		
		<div>teste3</div>
		
		<table>
			<tr>
				<th colspan="2">Ponto</th>
			</tr>
			<?php
			for($i=0;$i<$rows;$i++)
			{
			echo ("	<tr>																	");
			echo ("		<td><input type='radio' name='ponto' value='". $i ."' />	</td>		");
			echo ("		<td>" . mysql_result($result, $i, "ENDERECO") . 	"	</td>		");
			echo ("	</tr>																	");
			echo ("<script type='text/javascript'>  
					aLatitude.push(" . mysql_result($result, $i, 'LATITUDE') . ");
					aLongitude.push(" . mysql_result($result, $i, 'LONGITUDE') . ");</script>");
			}

			echo "</table>";
		

	
	}	
	else {
		echo "o id do usuário é:" . $idUsuario ;
	?>
	
	<br/>
	Selecione um usuário na abaixo
	<form action="buscaPontoUsuario.php" method="post">
		<?php
		for($i=0;$i<$rows;$i++)
		{
		  echo "<input type='radio' name='PAS' value='". mysql_result($result, $i, "idt_passageiro") ."' />" . mysql_result($result, $i, "nome") . "<br />";
		}	
		
		}
		?>
		<input type="submit"/>
	</form>

</body>
</html>