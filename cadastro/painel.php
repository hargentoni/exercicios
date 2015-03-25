<?php include("bdconnect.php"); ?>
<?php

	session_start();
	// se não foi iniciado/preenchido email ou senha vai redirecionar para login.php, através do header e depois vai 
	// fechar todo o resto da execução atráves do exit
	if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
		header("Location: login.php");
		exit;
	}else{
		echo "Você esta logado em sua sessão";
	}
?>

<html>
	<head>
		<tile>Painel</tile>
	</head>
	<body>
	<!-- ao clicar no botão sair, vai destroyr a sessão e direcionar para a página login.php -->
		<a href="logout.php"> sair </a>
	</body>
</html>

