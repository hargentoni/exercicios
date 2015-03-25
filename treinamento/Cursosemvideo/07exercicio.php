<!-- Estrutura de repetição Do While
	Exercicio: Criar um taboada a partir da seleção feita pelo o usuário. Mostrar na tela, toda a taboada.
-->

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if (!isset($_POST['submit'])) {
				
		?>
		<form action="07exercicio.php" method="post">
			<label for="in">Numero:</label>
			<select name="taboa" id="in">
				<?php
					$i = 1;
					while ($i <= 10) {
							echo "<option value='$i'>$i</option>";
							$i++;
						}	
				?>
						<!--<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option> -->
			</select>
			<input type="submit" name="submit" value="Taboada">
		</form>
	</body>
</html>

<?php
	}else{
		$valor = $_POST['taboa'];
		$vezes = 1;

		do{
			echo "$valor X $vezes é = ".$valor*$vezes."<br/>";
			$vezes++;

		}while ($vezes <= 10);
	}
?>