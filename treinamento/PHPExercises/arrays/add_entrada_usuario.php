<!--
Exercicio 4 http://phpexercises.com/php-add-user-input-array-exercise.html

Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. 
Print the following statement to the browser: "Travel takes many forms, 
whether across town, across the country, or around the world. 
Here is a list of some common modes of transportation:
" Follow this with an unordered list created by iterating through the array variable you created.

Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas. 
When the user clicks 'Go', process the input with array functions to send back the original list with the user's additions. 
Include another text box with the text "Add more?" and another submit button. 
When the user clicks this button, the page should reload with the new additions added to the previously expanded list. 
Your code should allow the user to add items as many times as they like.
-->


<!DOCTYPE html>
<html>
<head>
	<title>Add User Input to Array</title>
</head>
<body>

<h2 align="center">Add User Input to Array</h2>
<?php
//Se o botão submit não for clicado faça
if (!isset($_POST['submit'])){
$travel=array(
  "Automobile",
  "Jet",
  "Ferry",
  "Subway"
);
 
?>
 
<p>Travel takes many forms, whether across town, across the country, or
 around the world. Here is a list of some common modes of transportation:</p>
<ul>
 
<?php
foreach ($travel as $t){
  echo "<li>$t</li>\n"; 
}
?>
 
</ul>
<form action="add_entrada_usuario.php" method="post" >
<p>Please add your favorite, local, or even imaginary modes of travel 
to the list, separated by commas:</p>
<input type="text" name="added" size="80" />
<p />
 
<?php
//Send current travel array as hidden form data.
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
 
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//Senão, se o botão submit foi acionado faça.
}else{
//Retrieve established travel array.
$travel=($_POST['travel']);
//Convert user input string into an array.
$added=explode(',',$_POST['added']);
 
//Add to the established array.
array_splice($travel, count($travel), 0, $added);
//This could also be written $travel=array_merge($travel, $added);
 
//Return the new list to the user.
echo "<p>Here is the list with your additions:</p>\n<ul>\n";
foreach($travel as $t){
  //The trim functions deletes extra spaces the user may have entered.
  echo "<li>".trim($t)."</li>\n";  
}
echo"</ul>";  
 
?>
<p>Add more?</p>
<form action="add_entrada_usuario.php" method="post" >
<input type="text" name="added" size="80" />
<p />
<?php
//Send current travel array as hidden form data.
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
<input type="submit" name="submit" value="Go" />
</form>
<?php
}




	




