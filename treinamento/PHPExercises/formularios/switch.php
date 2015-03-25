<!-- 
Exercício 4 http://phpexercises.com/php-switch-statement-exercise.html

You probably noticed that the if-elseif-else construction was repetitive and cumbersome in the last exercise. It works best with only one or two choices. A more appropriate construction for this exercise is the switch statement, combined with a select field in the form for the days of the week. So your assignment in this PHP exercise is to rewrite the previous exercise using a select field for the user input and the switch statement to process the response.

Once again, here's the poem:

Laugh on Monday, laugh for danger. 
Laugh on Tuesday, kiss a stranger. 
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.

Remember to include a general response for any input that is not in the poem. To make things a little more interesting, include a 'Back' button on the response so that the user can go back and try different days.
-->

<html>
	<head>
		<title> Switch Statement </title>
	</head>
	<body>

		<h2 align='center'> Switch Statement </h2>
		<?php
			if (!isset($_POST['submit'])) {
				
			
		?>
		<form action="switch.php" method="post">
			<select name="dia"> Insira um dia da semna: 
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
			<option value="Thursday">Thursday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
			</select>
			<input type="submit" name="submit" value="Enviar">

		</form>
	</body>
</html>

<?php
}else{

$day = $_POST['dia'];

switch ($day) {
	case "Monday";
		echo "Laugh on ".$day.", Laugh for danger";
		break;
	case "Tuesday";
		echo "Laugh on ".$day.", Laugh for a stranger";
		break;
	case "Wednesday";
		echo "Laugh on ".$day.", Laugh for a letter";
		break;
	case "Thursday";
		echo "Laugh on ".$day.", Something better";
		break;
	case "Friday";
		echo "Laugh on ".$day.", Laugh for sorrow";
		break;
	case "Saturday";
		echo "Laugh on ".$day.", Joy tomorrow";
		break;	
	default:
		echo " No information for that day";
		

}
}