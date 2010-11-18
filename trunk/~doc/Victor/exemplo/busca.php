<?php

require_once "config.php";

// recebe por GET ou POST
$termo = $_REQUEST['termo'];

// CRIA A QUERY DE BUSCA
$sql = "SELECT nome, sobrenome FROM login WHERE NOME LIKE '%$termo%'";

// EXECUTA A QUERY
$result = mysql_query($sql);

// PEGA O RESULTADO
$rows = mysql_num_rows($result);

for($i=0;$i<$rows;$i++)
{
  echo mysql_result($result, $i, "nome") . "<br />";
}

?>
