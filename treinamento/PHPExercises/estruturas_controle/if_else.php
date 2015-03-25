<!DOCTYPE html>
<html>
<head>
	<title>If-Else Statement</title>
</head>
<body>
<h2>If-Else Statement</h2>

<?php
// Exercicio 1 http://phpexercises.com/php-if-else-statement-exercise.html
/*In this PHP exercise, you will use a conditional statement to determine what gets printed to the browser. 
Write a script that gets the current month and prints one of the following responses, 
depending on whether it's August or not:

It's August, so it's really hot.
Not August, so at least not in the peak of the heat.

Hint: the function to get the current month is 'date('F', time())' for the month's full name.
*/

$mes = date('F', time());
if ($mes=='August') {
	echo "Its August, so its really hot. <br />";
}else
	echo "Not August, so at least not in the peak of the heat";


?>

</body>
</html>

