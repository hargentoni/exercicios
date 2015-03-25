<html>
<head>
	<title>Arguments and Return Values</title>
</head>
<body>

	<form action="user_input.php" method="post">
		<p> Informe a largura e altura de um retângulo: </p>
		<p>
		Largura: <input type="text" name="largura" size="5"><br>
		Altura:  <input type="text" name="altura" size="5"><br>
		<input type="submit" name="submit" value="Calcular">
		</p>
	</form>

<?php
/*
Exercicio 3

For this PHP exercise, you will rewrite the rectangle area function from #2 once again, this time to accept user input. Present a form to the user with the message "Please enter the values of the length and width of your rectangle." Below this, supply two text boxes, one for length and one for width. Using your function to process the user supplied values, return the result statement from the previous exercise to the user. Reminder: the statement was "A rectangle of length $l and width $w has an area of $area.", where $l and $w are the arguments and $area is the result.
*/

// Criando a função para calcular a area de um retângulo. Os valores serão passados através dos parâmetros 
// function Calcula($l e $a)
	function Calcula($l,$a){
		echo "A altura do retangulo é ".$a." e sua largura ".$l." tem uma area de ".$l*$a;
	}

	$result = Calcula($_POST['largura'], $_POST['altura']);

?>


	</body>
</html>