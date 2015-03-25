<?php
	session_start();
		if ($_POST['senha'] == 'secreto') {
			$_SESSION['logado'] = true;
			header("Location: 01sessao.php");
			die;
		}else{
			echo "senha incorreta";
		}
?>