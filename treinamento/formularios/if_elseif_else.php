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