<?php
try{
	$con = new PDO("mysql:host=localhost;dbname=exercicios", "root","");
}catch(Exception $e ){
		echo 'Não foi possivel conectar com o banco de dados';
	}


?>