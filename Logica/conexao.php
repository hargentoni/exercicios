<?php
// Conexão feita apenas para banco de dados Mysql. Podemos utilizar o PDO, que serve para realizar conexão com qualquer banco.
$db = array();
$db['server'] = 'localhot';
$db['user'] = 'root';
$db['pass'] = '';
$db['dbname'] = 'php_treinamento';

$con = mysql_connect($db['server'],$db['user'],$db['pass']);
mysql_select_db('php_treinamento',$con);

?>