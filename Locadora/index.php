
<html>
	<head>
		<title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="css.css">
			
	</head>
	<body>

	<h3><center>Bem vindo!!!</center></h3>

	<font class="texto">Faça seu cadastro: </font>
	<div>
		<form action="cadastro.php" method="post">
			<div>
				<label name="nome">Nome: </label>
				<input type="text" name="nome" placeholder="nome"><br>
			</div>
			<div>
				<label name='sobrenome'>Sobrenome: </label>
				<input type="text" name="sobrenome" placeholder="sobrenome"><br>
			</div>
			<div>
				<label name='email'>Email: </label>
				<input type="text" name="email" placeholder="email"><br>
			</div>
			<div>
				<label name='senha'>Senha: </label>
				<input type="password" name="senha" placeholder="senha"><br>
			</div>
			<div>
				<label name='senha'>Confirme Senha: </label>
				<input type="password" name="senha" placeholder="Confirme"><br>
			</div>
			<div>
				<input type="submit" name="submit" value="Enviar">
			</div>
		</form>
	</div>

	</body>
	</html>