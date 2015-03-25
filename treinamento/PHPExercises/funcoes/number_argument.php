<?php
/*
Exercicio 5 Variable Argument Number

For this PHP exercise, you will again write two versions of your script. Start with the script from Arrays Ex. #3 and write a function to create form checkbox elements from the arguments supplied. This function should be able to take a variable number of arguments so that you can create any number of checkboxes calling it only once. Add your function at the beginning of your file before the HTML. Make sure each item is upper case.

Now rewrite the original form presented to the user with the checkbox function. Make sure the list returned to the user in the second part of the script is also upper case.
*/
	//Essa função vai criar um campo de checkbox, pegando os valores depois do form do html.
	function box(){
		//Essa função do php, retorna um array contendo uma lista de argumentos da função
		$arg=func_get_args();

		foreach ($arg as $v) {
			//a função ucwords(), retorna para maiúsculas o primeiro caractere de cada palavra
			echo "<input type='checkbox' name='clima[]'' value='$v'>".ucwords($v)."<br />\n";
		}
}	
?>
<html>
	<head>
		<title>Variable Argument Number</title>
	</head>
	<body>
		<h2 align="center">Variable Argument Number</h2>
		<?php
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="number_argument.php">
			<p>Please enter your information:</p>
			Cidade: <input type="text" name="cidade">
			Mes: <input type="text" name="mes">
			Ano: <input type="text" name="ano">
			<p> Por favor escolha o clima na lista a seguir</p>
			<?php
				box('sunshine','clouds','rain','hail','snow', 'wind','cold','heat');
			?>
			<input type="submit" name="submit" value="enviar">
		</form>
		<?php
			}else{
				$entradalocal = array(
					$_POST['cidade'],
					$_POST['mes'],
					$_POST['ano']
					);
				echo "Em $entradalocal[0] no mês de $entradalocal[1] $entradalocal[2], voce observou o seguinte clima: <br /> <ul>";
				$clima = $_POST['clima'];
				foreach ($clima as $c) {
					echo "<li>".$c."</li>\n";
				}
				echo "</ul>";
			}
		?>
	</body>
</html>