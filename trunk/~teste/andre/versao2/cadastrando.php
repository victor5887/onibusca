<?php
include("config.php");

$exibir_apos_enviar='sucesso.html';
$email=$_POST['email'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$nome=$_POST['nome'];
//$sexo=$_POST['sexo'];
//$dt_nascimento=$_POST['dt_nascimento'];
//Teste Andre
if ($_POST['sexo'] == "Homem")
{
	$sexo = "1";
}
elseif ($_POST['sexo'] == "Mulher")
{
	$sexo = "2";
}
$dt_nascimento = $_POST['ano']."-".$_POST['mes']."-".$_POST['dia'];
$uf=$_POST['uf'];
$cidade=$_POST['cidade'];

#//retirando espaços
$email=trim($email);
$login=trim($login);
$senha=trim($senha);
$nome=trim($nome);
$sexo=trim($sexo);
$dt_nascimento=trim($dt_nascimento);
$uf=trim($uf);
$cidade=trim($cidade);

$erro=0;

#//verificar se há email cadastrado no BD
    $s=mysql_query("SELECT * FROM tb_passageiro WHERE email='$email'");
    $mnr=mysql_num_rows($s);

#//encontrar números
    if( ereg("[0-9\()-.,:;*&¬!?|+}{/]", $nome) ){
    echo '<center><font color="#FF0000">Nome incorreto!</font>';
    $erro++; }

if($mnr!=0){ echo '<center><font color="#FF0000">E-mail já cadastro, Favor Utilizar Outro E-mail</font>'; $erro++; }

if($erro==0){
#//inseri no banco de dados se tudo for OK
    $i=mysql_query("INSERT INTO tb_passageiro (email, login, senha, nome, sexo, dt_nascimento, DT_CADASTRO, uf, cidade) VALUES ('$email','$login','$senha','$nome','$sexo','$dt_nascimento',CURDATE(),'$uf','$cidade')");
    echo "<script>window.location='$exibir_apos_enviar'</script>";
}
?>
<html><head><title>Onibusca</title></head>

<body></body></html>