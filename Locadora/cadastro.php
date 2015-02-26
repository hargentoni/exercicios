<?php

include('bdconexao.php');

$dados = array();
$dados[] = $_POST['nome'];
$dados[] = $_POST['sobrenome'];
$dados[] = $_POST['email'];
$dados[] = $_POST['senha'];
$dados[] = $_POST['senha'];

$erro = 0;

if (empty($dados[0])) {
	echo "Preencha o campo nome <br />";
	$erro=1;
}
if (empty($dados[1])) {
	echo "Preencha o campo sobrenome <br />";
	$erro=1;
}
if (!strpos($dados[2],'@')|| empty($dados[2])) {
	echo "Favor preencher o campo corretamente <br />";
	$erro=1;
}
if (empty($dados[3])) {
	echo "Preencha o campo senha <br />";
	$erro=1;
}
if (empty($dados[4])) {
	echo "Confirme a senha <br />";
	$erro=1;
}
if ($erro==1) {
	echo "Erro ao efetuar o cadastro!!!";
	exit;
}

$stmt = $con->prepare("INSERT INTO cadastrar(nome,sobrenome,email,senha,confirmacao) VALUES ('$dados[0]','$dados[1]','$dados[2]','$dados[3]','$dados[4]')");
$stmt->execute();

?>