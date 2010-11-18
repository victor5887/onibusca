<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"></head>
	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	
	<title>Onibusca -  Home teste</title>
	

	<link rel="stylesheet" href="styles.css" type="text/css" media="screen and (min-width:481px)" /> 
	<link rel="stylesheet" href="mob.css" type="text/css" media="screen and (max-width:480px)" />
		
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	
	<script type="text/javascript" src="script.js"></script>		
	<script language="javascript" type="text/javascript">
		function apareceMapa() {
			if (document.getElementById('map_canvas').style.visibility == "visible"){
			  document.getElementById('map_canvas').style.visibility = "hidden";
			}else{
				document.getElementById('map_canvas').style.visibility = "visible";
			}
			carregaTexto();
		}
		
		function carregaTexto() {
			if (document.getElementById('map_canvas').style.visibility == "visible"){
			  document.getElementById('btnMostrarMapa').value = "Esconder Mapa";
			}else{
				document.getElementById('btnMostrarMapa').value = "Mostrar Mapa";
			}
		}		
	</script>

	
</head>
<body onload="initialize(-22.835596,-43.399086,-22.839354,-43.399075)">

<div id="wrap">
	<div class="header">
		<div class="title">
			<h1><a href="#">Onibusca</a></h1>
			<h2><?php echo "Bem vindo " . $_COOKIE["usuarioNome"]; ?></h2>
		</div>
		<div class="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.html">Sobre Nós</a></li>
				<li><a href="cadastrar.html">Cadastre-se Aqui</a></li>
				<li><a href="login.php">LOGIN</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
			
				<!--Div de conteudo da Home-->
				<div class="content">
					 <!--
					<h3>Título</h3>
					<p>Bemvindo ao Onibusca</p>  -->
					<div id="map_canvas"></div>
					
					
					<!--Div de conteudo de Cadastro-->
				<div class="content" name="conteudos" id="cadastro" >
					<!--
					<h3>Introdução da Página de Cadastro</h3>
					<p>Paragrafo aqui</p>
					-->										
				</div>
					
					
					
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
					<p><input id="btnMostrarMapa" type="button" value="Clique Aqui Para Ativar o Botão" onclick="apareceMapa()" /></p>
				</div>
				<script>
					carregaTexto() ;
				</script>
			</div>
		</div>
	</div>
</div>
</body>
</html>
