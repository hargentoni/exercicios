<!-- 
Exercício 2 http://phpexercises.com/php-form-if-else-exercise.html

One very useful thing you can do with PHP is include the request for user input and the response in the same file, 
using conditional statements to tell PHP which one to show. 
For this PHP exercise, rewrite the two files of the previous exercise into one file using an if-else conditional statement.

Hint: You'll need some way to tell if the form has been submitted. 
The function to determine if a variable has been set and is not null is isset().
-->

<html>
	<head>
		<title> Interactive Form with If-Else Statement </title>
	</head>
	<body>

		<h2 align='center'> Interactive Form with If-Else Statement </h2>
		<?php 
		if (!isset($_POST['submit'])) {
		?>

		<form action="form_ifelse.php" method="post">
			Qual é a sua cidade favorita: <input type='text' name="cidade"><br>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</body>
</html>

<?php
}else{

$city = $_POST['cidade'];

echo "Your favorite is city : ".$city;

}
?>