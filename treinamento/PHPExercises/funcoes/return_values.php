<html>
<head>
	<title>Arguments and Return Values</title>
</head>
<body>



<?php
/*
Exercicio 2

This PHP exercise has two parts. For the first, you will create a function to accept two arguments, 
perform a calculation using them, then return a sentence with the result to the browser. 
The function will calculate the area of a rectangle, with the two arguments being width and height. 
(Reminder: area = width * height.) The sentence to be returned is "A rectangle of length $l and width $w has an area of $area.", where $l and $w are the arguments and $area is the result.
*/

// Criando a função para calcular a area de um retângulo. Os valores serão passados através dos parâmetros 
// function Calcula($l e $a)
	function Calcula($l, $a){
		$area = $l * $a;

	echo "A altura do retangulo é ".$a." e sua largura ".$l." tem uma area de ".$area;
	}

	$result = Calcula(10,5);

?>
	</body>
</html>