<?php
$usuario_login = $_POST['userLogin'];
$usuario_senha = $_POST["userPass"];

	include_once('conectar.php');
	
	$stmt = $con->prepare("INSERT INTO usuarios(usuario_login, usuario_senha) VALUES('{$usuario_login}','{$usuario_senha}')");
	$stmt->execute();

	