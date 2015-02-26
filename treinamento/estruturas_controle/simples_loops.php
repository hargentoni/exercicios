<!DOCTYPE html>
<html>
<head>
	<title>Simple Loops</title>
</head>
<body>

<?php

// Exercício 2 http://phpexercises.com/php-simple-loops-exercise.html

/*In this PHP exercise, you will put all the loops through their paces. 
Write a script that will print the following to the browser:

abc abc abc abc abc abc abc abc abc

xyz xyz xyz xyz xyz xyz xyz xyz xyz

1 2 3 4 5 6 7 8 9

Item A
Item B
Item C
Item D
Item E
Item F
Create the 'abc' row with a while loop, the 'xyz' row with a do-while loop, and the last two sections with for loops.
Remember to include HTML and source code line breaks in your output. No arrays allowed in this solution.
*/
$i=1;
while ($i < 10) {
	echo "abc \n";
	$i++;
}
echo "<br /><br />";
$i=1;
do {
	echo "xyz \n";
	$i++;
} while ($i < 10);
echo "<br /><br />";
$i=1;
do {
	echo $i."\n";
	$i++;
} while ($i < 10);
echo "<br /><br />";

echo "\n <ol>";
for ($i='A'; $i < 'G'; $i++) { 
	echo "<li>item ".$i."</li><br />" ;
}

?>

</body>
</html>
