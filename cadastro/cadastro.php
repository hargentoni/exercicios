<?php
// vai iniciar a conexão com o banco atráves da página bdconnect.php. Variável $banco vai receber a execução
// de inserir os dados do formulário no banco de dados

	include("bdconnect.php");

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$banco = $con->prepare("INSERT INTO cadastrar(nome, sobrenome, cidade, estado, cep, email, senha) 
		VALUES ('{$nome}', '{$sobrenome}', '{$cidade}', '{$estado}', '{$cep}', '{$email}', '{$senha}')");
	$banco->execute();




?>