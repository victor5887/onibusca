<?php
//ARQUIVO QUE REALISA A CONEXÃO COM O BANCO DE DADOS
require_once "config.php";

//obtem um id do usuário, deverá ser obtido por uma var de login


if ($_POST["PAS"] == '') 
	$idUsuario = 6; 
else 
	$idUsuario = $_POST["PAS"]; 
 
$idPontos = $_POST["pontos"]; 


$idNovoPonto = $_POST["selecaoPonto"]; 
if ($idNovoPonto != '') {
	$sql = "INSERT INTO TB_PASSAGEIRO_PONTO (ID_PONTO , ID_PASSAGEIRO) VALUES (" . $idNovoPonto .  ", " . $idUsuario . ");";
	$result = mysql_query($sql) or die("Error: ". mysql_error(). " with query ". $query . );
}



			
 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
	

	
	<script type="text/javascript">
		function	exibeRelacao(s) {
			<?php
			$sql = "SELECT * FROM TB_PONTO;";
			$result = mysql_query($sql) or die("Error: ". mysql_error(). " with query ". $query);
			$rows = mysql_num_rows($result); 
			for($i=0;$i<$rows;$i++)	{
					$lstPontos .= "<input type='radio' name='selecaoPonto' value='". mysql_result($result, $i, "ID") ."' /> " . mysql_result($result, $i, "ENDERECO") . 	"	<br/>		";	
				}
			 ?>
			 if (document.getElementById("relPontos").style.display="none") document.getElementById("relPontos").style.display="block";
			 else document.getElementById("relPontos").style.display="none";
			}
	</script>
</head>
<body>
	<a href="buscaPontoUsuario.php" >volta para busca de usuarios</a><br/>
	<?php
		if ($idUsuario!='')	{
		$sql = "SELECT * FROM TB_PONTO AS P INNER JOIN TB_PASSAGEIRO_PONTO AS PP where P.ID = PP.ID_PONTO and ID_PASSAGEIRO = " . $idUsuario;
		$result = mysql_query($sql) or die("Error: ". mysql_error(). " with query ". $query);
		$rows = mysql_num_rows($result);
		}
	
	?>
	
	<form action="cadastraPonto.php" method="post">
		id usu atual: <input type="text" name="PAS" value="<?php echo $idUsuario ;?>" />
		<table border="1">
			<tr>
				<th colspan="2">Pontos Cadastrados</th>
			</tr>
			<?php
				if ($rows != 0) {
					for($i=0;$i<$rows;$i++)	{
						echo ("	<tr>																	");
						echo ("		<td><input type='text' name='pontos' value='".  mysql_result($result, $i, "ID") ."' />	</td>		");
						echo ("		<td>" . mysql_result($result, $i, "ENDERECO") . 	"	</td>		");
						echo ("	</tr>																	");
						echo ("<script type='text/javascript'>  
								aLatitude.push(" . mysql_result($result, $i, 'LATITUDE') . ");
								aLongitude.push(" . mysql_result($result, $i, 'LONGITUDE') . ");</script>");
					}
				} else echo "<tr><td colspan='2'> Nenhum Ponto Cadastrado. </td></tr>";
			?>
			<tr>
				<td colspan="2">
					<a href="#" onclick="exibeRelacao();">Adicionar</a>	
					<div id="relPontos" style="display:none;border:1px dashed gray;">
						<p>Selecione um ponto na relação.</p>
						<form action='cadastraPonto.php' method='post'> 
							<?php echo $lstPontos ;?>
							<input onclick='exibeRelacao();' type='submit'/>
						</form>
					</div>	
				</td>
			</tr>
		</table>
		<input type="submit"/>
	</form>
	
	<?php echo $idPontos; ?>
	


</body>
</html>