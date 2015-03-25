<!-- 
Exercício 5 Associative Array

In this PHP exercise, you will again use the list of cities in Arrays Exercise #2. 
Here's the list, this time including countries as well as cities:

Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; 
Buenos Aires, Argentina; Cairo, Egypt; London, England.

This time, create an associative array, using the countries as keys, the cities as values. 
Create a form for the user, with the instructions Please choose a city:

Follow this request with a select field for the 10 cities, with the options created by looping through the array. 
When the user clicks the submit button, return the statement $city is in $country.
where $city is the value chosen by the user, and $country is its key.
-->

<!DOCTYPE html>
<html>
<head>
	<title>Associative Array</title>
	
</head>
<body>

	<h2 align="center">Associative Array</h2>

<?php
	$cidades = array();
	$cidades['Japao'] = 'Tokyo';
	$cidades['Brasil'] = 'Sao Paulo';
	$cidades['Estados Unidos'] = 'New York City';
	$cidades['Alemanha'] = 'Berlim';
	$cidades['Argentina'] = 'Buenos Aires';
	$cidades['Inglaterra'] = 'London';
?>
	<?php if (!isset($_POST['submit'])) { ?>
		
		<form action="associativo.php" method="post">
		<p> Por favor escolhe uma cidade:</p>
		<p>
		<select name="cidade">
				<?php
				// As opções do Select estão sendo criados com os valores associados a chave do array.
					foreach ($cidades as $v) {
						echo "<option value=\"$v\">$v</option>\n";
					}
				?>
								
			</select>
		</p>
		<input type="submit" name="submit" value="Enviar">
	</form>
<?php
}else{
	// $city recebe os valores do Select que estão na $v 
	$city = $_POST['cidade'];
	// $country recebe a pesquisa do valor($city) do arrya e retornara a chave($cidades) correspondente
	$country = array_search($city, $cidades);
	echo "<p>$city is in $country.</p>";
}
?>


</body>
</html>
