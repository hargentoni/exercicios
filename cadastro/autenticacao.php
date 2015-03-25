<?php // conectando com o banco de dados
	include("bdconnect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Autenticando usuario</title>
<script type="text/javascript">
// função que ser chamado caso o login esteja certo e vai direcionar para painel.php, depois de 5 segundos
	function loginsucesso(){
		setTimeout("window.location='painel.php'",5000);
	}
// função que ser chamado caso o login esteja errado e vai direcionar para login.php, depois de 5 segundos
	function loginfalhou(){
		setTimeout("window.location='login.php'",5000);
	}
</script>
</head>
<body>



<?php
	$email = $_POST['email'];
	$senha = $_POST['senha'];

// vai selecionar os dados do banco e verificar se já existe o email e senha informado no logon
	$sql = $con->prepare("SELECT * FROM cadastro WHERE email = $email and senha = $senha");

	// vai verificar quantas linhas possuem no banco de dados com os dados que o usuário informou.
	$row = mysql_num_rows($sql);

	// se existir o email e senha vai executar a session_star()
	if ($row > 0) {
		session_start();
		//vai receber o email e senha do formulário e autenticar
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		echo "Você esta autenticado! Aguarde um momento";
		echo "<script>loginsucesso()</script>";

	}else{
		echo "Nome de usuário ou senha inválidos";
		echo "<Script>loginfalhou()</script>";
	}

?>

</body>
</html>