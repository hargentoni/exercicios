<<!DOCTYPE html>
<html>
<head>
	<title>Arithmetic Operators</title>
</head>
<body>



<?php
//Exercício 3  http://phpexercises.com/php-arithmetic-operators-variables.html

/*PHP includes all the standard arithmetic operators. 
For this PHP exercise, you will use them along with variables to print equations to the browser. 
In your script, create the following variables:
$x=10;
$y=7;

Write code to print out the following:

10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3

*/
	$x=10;
	$y=7;
	$result = $x + $y;
	echo "$x + $y = $result <br />";
	$result = $x - $y;
	echo "$x - $y = $result <br />";
	$result = $x * $y;
	echo "$x * $y = $result <br />";
	$result = $x / $y;
	echo "$x / $y = $result <br />";
	$result = $x % $y;
	echo "$x % $y = $result <br />";
?>

</body>
</html>