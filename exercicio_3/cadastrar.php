<?php
include_once('conectar.php');

$usuario_nome = $_POST['usernome'];
$usuario_mail = $_POST['usermail'];
$usuario_senha = $_POST['usersenha'];
$usuario_sobrenome = $_POST['usersobrenome'];
$usuario_nascimento = $_POST['usernascimento'];
$usuario_endereco = $_POST['userendereco'];
$usuario_numero = $_POST['usernumero'];
$usuario_bairro = $_POST['userbairro'];
$usuario_complemento = $_POST['usercomplemento'];
$usuario_cidade = $_POST['usercidade'];


	
$stmt = $con->prepare("INSERT INTO usuarios(Nome,Sobrenome,Nascimento,Endereco,Numero,Bairro,Complemento,Cidade,Email,Senha)
						VALUES('{$usuario_nome}','{$usuario_sobrenome}','{$usuario_nascimento}','{$usuario_endereco}','{$usuario_numero}',
							'{$usuario_bairro}','{$usuario_complemento}','{$usuario_cidade}','{$usuario_mail}','{$usuario_senha}')");
	$stmt->execute();

?>