<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$numero = isset($_POST['numero'])?$_POST['numero']:0;
			$radio = isset($_POST['oper'])?$_POST['oper']:1;
			
			switch ($radio) {
				case 1:
					$r = $numero * 2;
					break;
				case 2:
					$r = $numero * $numero * $numero; 
					break;
				case 3:
					$r = sqrt($numero);
					break;
								
			}
			echo "Resultado da operação seleciona foi $r";

		?>



</body>
</html>