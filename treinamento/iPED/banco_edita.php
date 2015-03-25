<?php
	$con = mysql_connect("localhost","root","");
	mysql_select_db("exemplo",$con);

	if ($_POST['nome']) {
		mysql_query("UPDATE funcionarios SET nome_func = ".$_POST['nome']."WHERE id_func =".$_POST['id']);
		header("Location: banco_consulta.php");
		die;
	}

	$consulta = mysql_query("SELECT * FROM funcionarios WHERE id_func = ".$_GET['id']);
	$linha = mysql_fetch_array($consulta);
?>