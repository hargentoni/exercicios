<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>


</html>
<link rel="stylesheet" type="text/css" href="estilus.css">


<body>

<h1>Nota Prova</h1>

<div>
	<form class="formulario" action="logica5.php" method="POST">
		Primeira nota: 
		<input type="text" name="nota1" size="5"><br>
		Segunda nota:
		<input type="text" name="nota2" size="5"><br>
		Terceira nota:
		<input type="text" name="nota3" size="5"><br>
		<input type="submit" value="enviar">
		<input type="reset" value="limpar">
	</form>

	</body>


<?php
// 5ex. Faça um algoritmo que leia as 3 notas de um aluno e calcule a média final deste aluno. Considerar que a média é ponderada 
//e que o peso das notas é: 2,3 e 5, respectivamente.


$notas = array();
$notas[] = $_POST['nota1'];
$notas[] = $_POST['nota2'];
$notas[] = $_POST['nota3'];

$media = ($notas[0]*0.2)+($notas[1]*0.3)+($notas[2]*0.5);

echo "sua media é: ".$media;








?>
