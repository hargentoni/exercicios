<?php
// vai destroyer a sessão do usuário e direcionar para a página login.php
	session_start();
	session_destroy();
	header("Location: login.php");
?>