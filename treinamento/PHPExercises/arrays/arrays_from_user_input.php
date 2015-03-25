<!--
Exercicio 3

For this PHP exercise, create a form asking the user for input about the weather the user has experienced in a month of the user's choice. In separate text fields, request the city, month and year in question. Below that, show a series of checkboxes using the same weather conditions you used in Arrays Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.) Set up the form to create an array from the checked items.

In the response section of your script, create an array using the city, month and year the user entered as values. Print the following response "In $city in the month of $month $year, you observed the following weather:", where $city, $month and $year are values from the array you created.

Next, loop through the $weather[] array you received from the user to send back a bulleted list with the user's responses.
-->


<!DOCTYPE html>
<html>
<head>
	<title>Arrays from User Input</title>
</head>
<body>

<h2 align="center">Arrays from User Input</h2>
<?php if (!isset($_POST['submit'])) {
	
?>
<form  action="arrays_from_user_input.php" method="post">
	Qual cidade:  <input type="text" id="nome" name="cidade" size="10"><br>
	Informe o mês:<input type="text" name="mes" size="10"><br>
	Informe o ano:<input type="text" name="ano" size="10"><br>
	<input type="checkbox" name="clima[]" value="sunshine">sunshine  
	<input type="checkbox" name="clima[]" value="clounds">clounds  
	<input type="checkbox" name="clima[]" value="rain">rain  
	<input type="checkbox" name="clima[]" value="hail">hail
	<input type="checkbox" name="clima[]" value="sleet">sleet
	<input type="checkbox" name="clima[]" value="snow">snow
	<input type="checkbox" name="clima[]" value="wind">wind
	<input type="checkbox" name="clima[]" value="cold">cold
	<input type="checkbox" name="clima[]" value="heat">heat
	<br>
	<input type="submit" name="submit" value="Enviar">
</form>


<?php
	}else{
		$entrada = array($_POST['cidade'], $_POST['mes'], $_POST['ano']);

		echo "In $entrada[0] in the month of $entrada[1] $entrada[2], you observed the following weather";
		if(isset($_POST['clima']) || !empty($_POST['clima'])){

			$clima = $_POST['clima'];
			echo "<ul>";
			foreach ($clima as $v) {
				echo "<li>$v</li>";
			}
			echo "</ul>";
		}else{
			echo '<br>This City don´t have a weather';
		}
	}

?>

</body>
</html>