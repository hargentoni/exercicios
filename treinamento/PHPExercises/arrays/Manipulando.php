<!--
Exercicio 6

In this PHP exercise, you will create an array of temperatures. 
Choose a spring month to have a wider range of temperatures to handle. 
We'll use 30 days of the month. 
The exercise is generic, but feel free to use a specific month in your own script. 
The answer script will use the Fahrenheit scale, but again feel free to use Celsius if you prefer.

Create your array of 30 high temperatures, approximating the weather for a spring month, then find the average high temp, 
the five warmest high temps and the five coolest high temps. Print your findings to the browser.

Hint: the ASCII code for the degree sign is &deg;.
-->

<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>High Temperatures Array</title>
</head>
 
<body>
<h2>High Temperatures for Spring Month</h2>

<?php
//Create an array of 30 Fahrenheit high temperatures for a spring month.
$highTemps = array(
  68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 
  68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);
 
//Get number of temps.
$count = count($highTemps);
 
//Get a total of all temps.
$total = 0;
foreach ($highTemps as $h){
  $total += $h;
}
 
//Calculate average.
$avg = round($total / $count);
 
//Send data to the browser. &deg; is the ASCII code for the degree sign.
echo "<p>The average high temperature for the month was $avg &deg;F.</p>\n";
 
//Sort the temps and get the top and bottom five. 
//Use rsort to produce a descending sort.
rsort($highTemps);
//Pull out the top 5 temps.
//$topTemps, recebe um array, portanto ele acaba virando um Array.
$topTemps = array_slice($highTemps, 0, 5);
echo "<p>The warmest five high temperatures were: <br />\n";
foreach($topTemps as $t){
  echo "$t &deg;F <br/> \n";
}
echo "</p>";
   
//Pull out the bottom five temps.
//$lowTemps, recebe um array, portanto ele acaba virando um Array.
$lowTemps = array_slice($highTemps, -5, 5);
echo "<p>The coolest five high temperatures were: <br/>\n";
foreach($lowTemps as $l){
  echo "$l &deg;F <br/> \n";
}
echo "</p>";
?>

</body>
</html>