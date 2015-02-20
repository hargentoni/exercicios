<?php
 
 include_once('conectebd.class.php');

$usuario_login = $_POST['login'];
$usuario_senha = $_POST['senha'];


$mysql->query("INSERT INTO loja(login, senha), VALUES ('{$usuario_login}','{$usuario_senha}')");




?>