<!DOCTYPE html>
<!-- Sistema de cadastro - Tela para cadastro de dados -->
<html>
	<head>
		<title>Cadastro</title>
	</head>
	<body>
		<h1>Cadastro</h1>

		<div id="formcadastro">
			<fieldset>
				<legend>Cadastro</legend>
				<form action="cadastro.php" method="post">
					<label>Nome:</label>
					<input type="text" name="nome"><br/>
					<label>Sobrenome:</label>
					<input type="text" name="sobrenome"><br/>
					<label>cidade:</label>
					<input type="text" name="cidade"><br/>
					<label>Estado:</label>
					<input type="text" name="estado"><br/>
					<label>Cep:</label>
					<input type="text" name="cep"><br/>
					<label>e-mail:</label>
					<input type="text" name="email"><br/>
					<label>Senha:</label>
					<input type="password" name="senha"><br/>
					<input type="submit" value="Cadastrar">
				</form>
			</fieldset>
		</div>

	</body>
</html>


