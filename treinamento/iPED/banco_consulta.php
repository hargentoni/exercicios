<?php
//criando a conexão com o banco
	$con = mysql_connect("localhost","root","");
	//selecionando a base de dados e conectando nela
	mysql_select_db("exemplo1",$con);

	//passando comandos para o banco de dados atráves da função
	$consulta = mysql_query("SELECT * FROM funcionarios");

	
	while ($dados = mysql_fetch_array($consulta)) {
		echo $dados['id_func']." - ".$dados['nome_func']."<br/>";
	}

	
		mysql_query("DELETE FROM funcionarios WHERE id_func = 2");
		header("Location: banco_consulta.php");
		die;

		

?>