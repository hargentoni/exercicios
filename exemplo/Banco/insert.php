<?php

include('conexao.php');

// comando para inserir as informações na tabela cliente nos campos nome, sobrenome e empresa. 
$sql = "INSERT INTO cliente(nome,sobrenome,empresa) Values('Maria', 'Silva', 'JNRTI')";

// comando que executa a inserção dos dados no banco de dados.
mysql_query($sql) or die ('teste');

//comando para alterar as informações no banco de dados
// Legenda, Atualize o valor na coluna da tabela cliente, onde id seja 1

// $sql = "Update cliente set nome da coluna ='Valor da coluna' Where id='1'";

// comando para deletar do banco de dados
//$sql = "Delete From cliente Where nome='Maria'";

 

?>