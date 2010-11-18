<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	
	<title>Onibusca -  Home teste</title>
	
	<link rel="stylesheet" href="style/styles.css" type="text/css" />
	
	<script type="text/_javascript_" src="script.js"></script>
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	
	<script type="text/javascript">

		var directionDisplay;
		var directionsService = new google.maps.DirectionsService();

		function initialize() {

		directionsDisplay = new google.maps.DirectionsRenderer();

		var latlng = new google.maps.LatLng(-22.839121,-43.39881);
		var myOptions = {
		zoom: 16,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"),
		myOptions);
			var marker = new google.maps.Marker({  
				position: new google.maps.LatLng(-22.839121,-43.39881),  
				map: map,
				title: 'Olha eu aqui!!'  
			}); 	
		directionsDisplay.setMap(map);

		calcRoute();

		}

		function calcRoute() {
		  var request = {
		    origin:"-22.835596,-43.399086", 
		    destination:"-22.839121,-43.39881",
		    travelMode: google.maps.DirectionsTravelMode.DRIVING
		  };
		  directionsService.route(request, function(result, status) {
		    if (status == google.maps.DirectionsStatus.OK) {
		      directionsDisplay.setDirections(result);
		      alert('Trajeto de ' + result.routes[0].legs[0].distance.text + ' em ' + result.routes[0].legs[0].duration.text + ' de carro');
		    }
		  });
		  
		}

	</script>
	
	<style type="text/css">
		#map_canvas { height: 100% }
	</style>
	
</head>
<body onload="initialize()">

<div id="wrap">
	<div class="header">
		<div class="title">
			<h1><a href="#">Onibusca</a></h1>
			<h2>Para chegar logo</h2>
		</div>
		<div class="nav">
			<ul>
				<li><a href="index.html">Home</a></li>
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
				
					<h3>Título</h3>
					<p>Bemvindo ao Onibusca</p>
					<div id="map_canvas" style="width:450px; height:400px;"></div>
					
					<form name="input" action="html_form_action.asp" method="get">
						First name: <input type="text" name="FirstName" value="Mickey" /><br />
						Last name: <input type="text" name="LastName" value="Mouse" /><br />
					<input type="submit" value="Submit" onclink="" />
					</form> 

					<?php echo "Isso eh server side."; ?>
					<script type="text/javascript">document.write("Isso eh client side");</script>
					
					<!--Div de conteudo de Cadastro-->
				<div class="content" name="conteudos" id="cadastro" >
					<h3>Introdução da Página de Cadastro</h3>
					<p>Paragrafo aqui</p>
															
				</div>
					
					
					
				</div>
				
				
				
				<div class="sidebar">			
					<h4>About us</h4>
					<p>A little bit of information about your website, what you do, what's on offer and why visitors should stick around</p>
		
					<h4>Links</h4>
					<ul>
						<li><a href="http://www.spyka.net" title="spyka Webmaster resources">spyka webmaster</a></li>
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
					<p><a href="http://validator.w3.org/check/referer" title="valid XHTML">XHTML</a> | 
					<a href="http://jigsaw.w3.org/css-validator/check/referer" title="valid CSS">CSS</a> 
					&nbsp;&nbsp; &copy; YourWebsiteName. Design: <a href="http://www.spyka.net">spyka webmaster</a> |
					<a href="http://www.justfreetemplates.com">Free Web Templates</a></p> 
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
