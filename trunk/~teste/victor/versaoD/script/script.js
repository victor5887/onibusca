
	var directionDisplay;
	var directionsService;

	// Função q verifica o cookie de usuário logado, isso é totalmente burlável, mas dá senssação de segurança enorme ao usuário...rs
	
	function load()
	{
		alert("Loading...");
		checaCookie();
		alert("foi checado...");
	
	}
	
	function setCookie(c_name,value,expiredays)
	{
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie=c_name+ "=" +escape(value)+
	((expiredays==null) ? "" : ";expires="+exdate.toUTCString());
	}
	
	function getCookie(c_name)
	{
	if (document.cookie.length>0)
	  {
	  c_start=document.cookie.indexOf(c_name + "=");
	  if (c_start!=-1)
		 {
		 c_start=c_start + c_name.length+1;
		 c_end=document.cookie.indexOf(";",c_start);
		 if (c_end==-1) c_end=document.cookie.length;
		 return unescape(document.cookie.substring(c_start,c_end));
		 }
	  }
	return "";
	}

	
	function checaCookie()
	{
		idUsuario = getCookie('ID_PASSAGEIRO');
		if (idUsuario!=null && idUsuario!="")
			{
			alert('o id do usuahrio logado eh '+idUsuario+'!');
			}
		else
			{
			window.location.assign("#/login.php")
			}
	}
	
	
	
	function initialize(latInicio,lngInicio,latFim,lngFim) {

	directionsDisplay = new google.maps.DirectionsRenderer();

//	latInicio = -22.835596;
//	lngInicio = -43.399086;

//	latFim = -22.839354;
//	lngFim = -43.399075;

	
	inicio = latInicio + "," + lngInicio;
	fim = latFim + "," + lngFim;


	var latlng = new google.maps.LatLng(latInicio,lngInicio);
	var myOptions = {
	zoom: 16,
	center: latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"),
	myOptions);
	//	var marker = new google.maps.Marker({  
	//		position: new google.maps.LatLng(-22.837549,-43.397589),  
	//		map: map,
	//		title: 'Olha eu aqui!!'  
	//	}); 	
	directionsDisplay.setMap(map);

	calcRoute(inicio,fim);

	}

	function calcRoute(inicio,fim) {

	  directionsService = new google.maps.DirectionsService();

	  //Testando waypoints
	  var waypts = [];

	  waypts.push({
          	location:'-22.834815,-43.400749',
          	stopover:true
      	  });


	  var request = {
	    origin: inicio, 
	    destination: fim,
	    travelMode: google.maps.DirectionsTravelMode.DRIVING,
	    waypoints: waypts
	  };
	  directionsService.route(request, function(result, status) {
	    if (status == google.maps.DirectionsStatus.OK) {
	      directionsDisplay.setDirections(result);
	      alert('Trajeto de ' + result.routes[0].legs[0].distance.text + ' em ' + result.routes[0].legs[0].duration.text + ' de carro');
		  document.getElementById("message").value='Trajeto de ' + result.routes[0].legs[0].distance.text + ' em ' + result.routes[0].legs[0].duration.text + ' de carro';
		  
	    }
	  });
	  
	}

	