<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" lang="pt">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	
	<title>Onibusca -  Home teste</title>
	
	<script type="text/javascript" src="jquery.js"></script>

        <script language="javascript">
          $('document').ready(function(){
              $("#termo").keydown(function(){
                  $("#resultado").text('');
                  $.get('busca.php', {termo: $("#termo").val()}, function(data){
                     $("#resultado").append(data);
		  }); // FECHA TAG
                  console.log($("#termo").val());
	      }); // end termo change
          }); // END document.ready
        </script>
</head>
<body>

<input type="text" id="termo" value="" />

<div id="resultado">
</div>

</body>
</html>
