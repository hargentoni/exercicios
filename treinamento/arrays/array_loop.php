<!-- 
Exercicio 2

For this exercise, you will use a list of ten of the largest cities in the world. 
(Please note, these are not the ten largest, just a selection of ten from the largest cities.) 
Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, 
Cairo, London.

Print these values to the browser separated by commas, using a loop to iterate over the array. 
Sort the array, then print the values to the browser in an unordered list, again using a loop.

Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, 
and print it once more to the browser in an unordered list.

-->
<!DOCTYPE html>
<html>
<head>
	<title>Simple Array Loop</title>
	
</head>
<body>

<?php
$cidades = array(
	"Tokyo",
	"Mexico City",
	"New York City",
	"umbai",
	"Seoul",
	"Shanghai",
	"Lagos",
	"Buenos Aires",
	"Cairo",
	"London");
 
foreach ($cidades as $v) {
	echo "$v, ";
}
//Ordena os elementos contidos no array. 
sort($cidades);

//lista não ordenada
echo "<ul>";
foreach ($cidades as $v) {
	echo "<li>$v</li>";
}
echo "</ul>";

//Função para adicionar um ou mais elementos no final do Array();.
array_push($cidades, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');

echo "<ul>";
foreach ($cidades as $v) {
	echo "<li>$v</li>";
}
echo "</ul>";



?>

</body>
</html>