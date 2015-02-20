<?php
// O include é para buscar e carregar as configurações da classe Mysql.class.php
include_once('Mysql.class.php');
// Criado um novo objeto, onde ele fornece o caminho do banco para a classe Mysql.class.php
$mysql = new Mysql('localhost','exercicios','root','');
// A query que é a mesma do arquivo Mysql.class.php, vai inserir no banco o usuário e a senha.
$mysql->query("INSERT INTO usuarios(usuario_login, usuario_senha) VALUES('Roberto','123@123')");

?>