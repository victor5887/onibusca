<?php

//Defina o título do site
    $titulo="Cadastrando Usuario Onibusca";
    
//Dados do mySql

	$host = "mysql.diariodecodigos.info";
	$user = "diariodecodigo03"; 			# usuário do mySql
	$passwd = "onibusca";					# senha do mySql
	$schema = "diariodecodigo03";			# nome do banco de dados
    
//Conexão
    @mysql_connect($host, $user, $pass);
    mysql_select_db($bd);
?>