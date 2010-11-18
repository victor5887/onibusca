<?php
/*********************************
*   Tutorial :: Fazendo cadastros
*  
**********************************/

//Defina o título do site
    $titulo="Cadastrando Usuario Onibusca";
    
//Dados do mySql
    $serverName = "mysql.diariodecodigos.info";
    $user="diariodecodigo03"; # usuário do mySql
    $pass="onibusca"; # senha do mySql
    $bd="diariodecodigo03"; # nome do banco de dados
    
//Conexão
    @mysql_connect($serverName, $user, $pass);
    mysql_select_db($bd);
?>