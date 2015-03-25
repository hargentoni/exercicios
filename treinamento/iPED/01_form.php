<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div>
			<?php if (!isset($_POST['submit'])) { ?>
						
				<form action="01_form.php" method="post">
					<fieldset><legend>Dados Pessoais</legend>
						<label for="inome">Nome:</label><br/>
						<input type="text" name="nome" id="inome" maxlength="20" size="20"><br/>
						<label for="iend">Endereço:</label><br/>
						<input type="text" name="end" id="iend" maxlength="20" size="20"><br/>
					</fieldset>
					<fieldset><legend>Pesquisa</legend>
						<p>Quantos Livros você compra por ano?</p>
						<input type="radio" name="escolha" value="Nenhum" id="k1">
						<label for="k1">Nenhum</label><br/>
						<input type="radio" name="escolha" value="De 1 a 5" id="k2">
						<label for="k2">De 1 a 5</label><br/>
						<input type="radio" name="escolha" value="De 5 a 10" id="k3">
						<label for="k3">De 5 a 10</label><br/>
						<input type="radio" name="escolha" value="De 10 a 20" id="k4">
						<label for="k4">De 10 a 20</label><br/>
						<input type="radio" name="escolha" value="Mais de 20" id="k5">
						<label for="k5">Mais de 20</label><br/>
						<p>Qual seu estilo de livro favorito?</p>
						<input type="checkbox" name="d[Romance]" id="ip1">
						<label for="ip1">Romance</label><br/>
						<input type="checkbox" name="d[Drama]" id="ip2">
						<label for="ip2">Drama</label><br/>
						<input type="checkbox" name="d[Suspense]" id="ip3">
						<label for="ip3">Suspense</label><br/>
						<input type="checkbox" name="d[Técnico]" id="ip4">
						<label for="ip4">Técnico</label><br/>
					</fieldset>
					<input type="submit" name="submit" value="Enviar">
				</form>	
		</div>


		
	</body>
</html>

<?php
	}else{
		$nome = $_POST['nome'];
		$end = $_POST['end'];
		$qlivro =  $_POST['escolha'];
		$estilo = $_POST['d'];

		echo "Nome: ".$nome."<br/>";
		echo "Endereço: ".$end."<br/>";
		echo "Qtd Livros: ".$qlivro."<br/>";
		echo "Estilo: ";

		foreach ($estilo as $key => $f) {
				echo $key." - ";
		}

	}


?>