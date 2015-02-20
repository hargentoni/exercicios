<?php
include_once("Mysql.class.php"); // chamando a Mysql.class.php

$nome_heroi = $_POST['nome_heroi']; // variavel que vai receber os dados via POST do campo name do formulario
$nome_inimigo = $_POST['nome_inimigo']; // idem
// instanciando a classe Mysql e informando os dados para realizar a conexão com o banco
$mysql = new Mysql("localhost", "exercicios", "root", ""); 
// chamando a função query da Mysql.class.php e passando os valores para serem inseridos no banco.
$mysql->query("INSERT INTO sentai(nome_heroi, nome_inimigo) VALUES ('{$nome_heroi}', '{$nome_inimigo}')"); 

?>