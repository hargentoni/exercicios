<!-- Exercicio 3 http://phpexercises.com/php-if-elseif-else-exercise.html

For this PHP exercise, you will use the same format as the previous exercise, requesting input in the first part, and responding in the second, through the magic of PHP's if-else statement. In the first section, give the user an input field and request that they enter a day of the week.

For the second section, you'll need the following poem:

Laugh on Monday, laugh for danger. 
Laugh on Tuesday, kiss a stranger. 
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.

Using the else-elseif-else construction, set each line to output in response to the day the user inputs, with a general response for any input that is not in the poem.
-->

<html>
	<head>
		<title> If-Elseif-Else Construction </title>
	</head>
	<body>

		<h2 align='center'> If-Elseif-Else Construction </h2>
		<?php
			if (!isset($_POST['submit'])) {
				
			
		?>
		<form action="if_elseif_else.php" method="post">
			Insira um dia da semna: <input type='text' name="dia"><br>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</body>
</html>

<?php
}else{

$day = $_POST['dia'];

if ($day=="Monday") {
	echo "Laugh on ".$day.", Laugh for danger";
}elseif ($day=="Tueday") {
	echo "Laugh on ".$day.", Laugh for a stranger";
}elseif ($day=="Wednesday") {
	echo "Laugh on ".$day.", Laugh for a letter";
}elseif ($day=="Friday") {
	echo "Laugh on ".$day.", Laugh for sorrow";
}elseif ($day=="Saturday") {
	echo "Laugh on ".$day.", joy tomorrow";
}else{
	echo "No information for that day";
}
}



?>