<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			span.cidade{
				font-size: 15pt;
				color: red;
			}

		</style>
	</head>
	<body>
		<?php
			$cidade = $_POST['estado'];

			switch ($cidade) {
				case 1:
					echo "Você mora na ";
					echo "<span class='cidade'> Regiao Centro Oeste </span> <br/>";
					break;
				case 2:
				case 3:
					echo "Você mora na ";
					echo "<span class='cidade'> Regiao Sudeste </span> <br/>";
					break;
				case 4:
					echo "Você mora na ";
					echo "<span class='cidade'> Regiao Centro Oeste </span> <br/>";
					break;
				}
		?>
		<a href="05exercicio.html"><input type="button" value="Voltar"></a>
		 


	</body>
</html>