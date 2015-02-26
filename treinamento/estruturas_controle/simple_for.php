<!DOCTYPE html>
<html>
<head>
	<title>Squares for the Numbers 1-12</title>
</head>
<body>


<?php

//Exercicios 3 http://phpexercises.com/php-simple-for-loop-exercise.html

/* oops are very useful in creating lists and tables. 
In this PHP exercise, you will use a loop to create a list of equations for squares.

Using a for loop, write a script that will send to the browser a list of squares for the numbers 1-12.
Use the format, "1 * 1 = 1", and be sure to include code to print each formula on a different line.

*/
for ($i=1; $i<=12; $i++) {
	$result = $i*$i;
	echo "$i * $i = $result <br />\n";
}



?>

</body>
</html>