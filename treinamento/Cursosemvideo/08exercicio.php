<!-- Estrutura de repetição Do While
	Exercicio: Mostrar se o número é primo ou não com as seguintes condições:
	- mostrar qual número foi selecionado
	- mostrar por quais números ele é divisivel
	- o total de multiplos
	- mostrar o resultado e se ele é ou não primo
-->

<html>
	<head>
		<title></title>
		<style type="text/css">
		font.certo{
			font-size: 15pt;
			color: blue;
		}
		font.erro{
			font-size: 15pt;
			color: red;
		}
		</style>
	</head>
	<body>
		<?php
			if (!isset($_POST['submit'])) {
				
		?>
		<form action="08exercicio.php" method="post">
			<label for="in">Numero:</label>
			<input type="number" name="v1" id="in">
			<input type="submit" name="submit" value="Primo">
		</form>
	</body>
</html>

<?php
	}else{
		$valor = $_POST['v1'];
		echo "Analisando o número $valor <br/>";
		echo "Valores multiplos: ";
		$c = 1;
		$mult = 0;
		for ($c=1; $c <= $valor ; $c++) {
			if ($valor % $c == 0) {
				$mult++;
			 	echo "$c \n";
			 }
		}
		echo "<br/>";
		echo "O total de multiplos são: $mult <br/>";
		echo "Resultado: ";
		if ($mult <= 2) {
			echo "$valor <font class='certo'/>é Primo";
		}else{
			echo "$valor <font class='erro'/>Não é Primo";
		}
	}	
?>