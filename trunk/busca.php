<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

require_once "~teste/config.php";


$idPassageiro = $_COOKIE["ID_PASSAGEIRO"];


// CRIA A QUERY DE BUSCA
$sql  = "SELECT ENDERECO, LATITUDE, LONGITUDE FROM TB_PONTO";
$sql2 = "select IDT_PASSAGEIRO, NOME FROM TB_PASSAGEIRO WHERE IDT_PASSAGEIRO = '". $idPassageiro ."';" ;


// EXECUTA A QUERY
$result = mysql_query($sql);   //Pra debug use:   or die("Error: ". mysql_error(). " with query ". $query)
$result2 = mysql_query($sql2);

// PEGA O RESULTADO
$rows = mysql_num_rows($result);
$rows2 = mysql_num_rows($result2);


?>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Onibusca :: Consulta</title>
	
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="script.js"></script>
	
	<script type="text/javascript">
		var aLatitude=new Array();
		var aLongitude=new Array();
		
		function check(opcao)
		  {
		  latitude= aLatitude[opcao];
		  longitude= aLongitude[opcao];
		  document.getElementById("lat").value=latitude;
		  document.getElementById("lng").value=longitude;
		  
		  }

		initialize(latitude,longitude,-22.839354,-43.399075);
		
	</script>
	
	<style type="text/css">
		#map_canvas { height: 100% }
		
		.XX { borda: 1px solid red;}
	</style>

</head>

<body>

<div id="wrap">
	<div class="header">
		<div class="title">
			<h1><a href="#">Onibusca</a></h1>
			<h2>Pellentesque habitant morbi.</h2>
		</div>
		<div class="nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="examples.html">Examples</a></li>
				<li><a href="#">Solutions</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<h3>Busca</h3>
					<div class="XX">
						<?php 
						echo $_COOKIE["ID_PASSAGEIRO"];
						?>
						
						<p onclick="<?php ola(); ?>">AAAA </p>
					</div>
					
					<table>
						<tr>
							<th colspan="2">Ponto</th>
						</tr>
						<?php
						for($i=0;$i<$rows;$i++)
						{
						echo ("	<tr>																	");
						echo ("		<td><input type='radio' name='ponto' value='". $i ."' onclick='check(this.value)' />	</td>		");
						echo ("		<td>" . mysql_result($result, $i, "ENDERECO") . 	"	</td>		");
						echo ("	</tr>																	");
						echo ("<script type='text/javascript'>  
								aLatitude.push(" . mysql_result($result, $i, 'LATITUDE') . ");
								aLongitude.push(" . mysql_result($result, $i, 'LONGITUDE') . ");</script>");
						}
						?>
					</table>

					<h3>Posição</h3>
					<form action="#" method="get">
						<div style="float:left;margin:0px 20px 0px 0px;"><label for="name">Latitude:</label><br />
						<input type="text" name="Latitude" id="lat" value="" /><br /></div>
	
						<div><label for="email">Longitude:</label><br />
						<input type="text" name="Longitude" id="lng" value="" /><br /></div>
						<p><label for="message">Mensagem:</label><br />
						<textarea cols="60" rows="11" name="message" id="message"></textarea><br /></p>
					</form>
					
					<h3>Mapa</h3>
					<div id="map_canvas" style="width:750px; height:350px;"></div>
					
				</div>
				<div class="sidebar">			
					<h4>About us</h4>
					<p>A little bit of information about your website, what you do, what's on offer and why visitors should stick around</p>
		
					<h4>Links</h4>
					<ul>
						<li><a href="http://www.spyka.net" title="spyka Webmaster resources">spyka webmaster</a></li>
						<li><a href="http://www.justfreetemplates.com" title="free web templates">JustFreeTemplates</a></li>
						<li><a href="http://www.spyka.net/forums" title="webmaster forums">Webmaster forums</a></li>
						<li><a href="http://www.profileartist.net" title="premium templates">Premium templates</a></li>
		
						<li><a href="http://www.awesomestyles.com" title="free forum skins and templates">Forum resources</a></li>
		
					</ul>
					<h4>Search</h4>
					<form action="#" method="get" class="searchform">
						<p>
							<input type="text" id="searchq" name="q" />
							<input type="submit" class="formbutton" value="Search" />
						</p>
					</form>
				</div>
				
				<div class="footer">
					<p><a href="http://validator.w3.org/check/referer" title="valid XHTML">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="valid CSS">CSS</a> &nbsp;&nbsp; &copy; YourWebsiteName. Design: <a href="http://www.spyka.net">spyka webmaster</a> | <a href="http://www.justfreetemplates.com">Free Web Templates</a></p> 
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
