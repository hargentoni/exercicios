<?php
	$estoque_produto = $_POST['produto'];
	$estoque_tipo = $_POST["tipo"];
	$estoque_qtd = $_POST["qtd"];
	$estoque_valor = $_POST["valor"];
	$estoque_vendido = $_POST["vendido"];

	if(!is_numeric($estoque_qtd) || !is_numeric($estoque_valor) || !is_numeric($estoque_vendido)){
		echo 'Preencha os campos corretamente!';
		sleep(10); // Aguarda execução
		header('Location: http://exercicio.local/admin/produtos.php'); // Redireciona a pagina
		exit(); // finaliza execução
	}

	include_once('../exercicio_2/Mysql.class.php'); //executando a classe de outros projeto
	$mysql = new Mysql("localhost","exercicios", "root", ""); //passando o caminho com as informações para se conectar ao banco


	$resultado = $mysql->query("INSERT INTO estoque(Produto, Tipo, Qtd, Valor, Vendidos) 
	VALUES('{$estoque_produto}','{$estoque_tipo}','{$estoque_qtd}','{$estoque_valor}','{$estoque_vendido}')");

	if($resultado){
		header('Location: http://exercicio.local/admin/');
	}else{
		echo 'Erro ao cadastrar produto!';
		sleep(4);
		header('Location: http://exercicio.local/admin/produtos.php');
		exit();

	}

?>