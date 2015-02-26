<!DOCTYPE html>
<html>
<head>
	<title>Nested For Loops</title>
	<style type="text/css">
	table{
		background-color: yellow;
		border: 1px solid black;
	}

	</style>
</head>
<body>


<?php
// Exercício 4 http://phpexercises.com/php-nested-for-loops-exercise.html
/* HTML tables involve a lot of repetitive coding - a perfect place to use for loops. 
You can do even more if you nest the for loops.

In this PHP exercise, use two for loops, one nested inside another. Create the following multiplication table:

1	2	3	4	5	6	7
2	4	6	8	10	12	14
3	6	9	12	15	18	21
4	8	12	16	20	24	28
5	10	15	20	25	30	35
6	12	18	24	30	36	42
7	14	21	28	35	42	49


Unless you want to try your hand at CSS styling, don't be concerned about the appearance of the table, 
its borders and text alignment. The point of the exercise it to create the data and the table tags using the for loops.
*/

echo "<table border='1'>";
for ($i=1; $i<=10 ; $i++) {
	echo "<tr>";
	for ($j=1; $j<=10; $j++) { 
		echo "<td>".$i*$j."<//td>";
	}
	echo "</tr>";
}
echo "</table>";

?>


</body>
</html>
