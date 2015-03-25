<!-- Exercicio 1  http://phpexercises.com/php-simple-array-exercise.html
Arrays allow you to assign multiple values to one variable. 
For this PHP exercise, write an array variable of weather conditions with the following values: 
rain, sunshine, clouds, hail, sleet, snow, wind. 
Using the array variable for all the weather conditions, echo the following statement to the browser:

We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. 
Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.

Don't forget to include a title for your page, both in the header and on the page itself.

-->
<!DOCTYPE html>
<html>
<head>
	<title>Clima do tempo</title>
</head>
<body>

<h2 align="center">Clima do tempo</h2>

<?php
$clima = array('Rain','Sunshine','Clouds','Hail','Sleet','Snow','Wind');

echo "<p> We've seen all kinds of weather this month. At the beginning of the month,<br /> we had $clima[5] and $clima[6]. 
Then came $clima[1] with a few $clima[2] and some $clima[0].<br /> At least we didn't get any $clima[3] or $clima[4] </p>";




?>

</body>
</html>
