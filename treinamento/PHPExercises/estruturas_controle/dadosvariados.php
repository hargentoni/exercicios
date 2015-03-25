<<!DOCTYPE html>
<html>
<head>
	<title>Variavel Tipos de Dados</title>
</head>
<body>

<h2>PHP Variavel Tipos de Dados</h2> 


<?php
// Exercicio 7 http://phpexercises.com/php-variable-data-types-exercise.html

/*PHP allows several different types of variables. 
For this PHP exercise, you will create one variable and assign it different values, then test its type for each value.

Write a script using one variable “$whatsit” to print the following to the browser. 
Your echo statements may include no words except “Value is”. 
In other words, use the function that will output the variable
type to get the requested text. Use simple HTML to print each
statement on its own line and add a relevant title to your page. 
Include line breaks in your code to produce clean, readable HTML.
Value is string.
Value is double.
Value is boolean.
Value is integer.
Value is NULL.
*/

// a função gettype, pega o tipo da variavel.
$whatsit= 'Helio';
echo "Values is ".gettype($whatsit)."<br />";
$whatsit= 89.9;
echo "Values is ".gettype($whatsit)."<br />";
$whatsit= true;
echo "Values is ".gettype($whatsit)."<br />";
$whatsit= 9;
echo "Values is ".gettype($whatsit)."<br />";
$whatsit= null;
echo "Values is ".gettype($whatsit)."<br />";

?>

</body>
</html>