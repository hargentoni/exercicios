<!DOCTYPE html>
<html>
	<head>
		<?php
			$texto = isset($_POST['texto'])?$_POST['texto']:"Texto não informado";
			$tamanho = isset($_POST['tam'])?$_POST['tam']:"14pt";
			$cor = isset($_POST['cor'])?$_POST['cor']:"#000000";

		?>
		<style>
			span.texto{
				font-size: <?php echo $tamanho; ?>;
				color: <?php echo $cor; ?>;

			}

		</style>
		<title></title>
	</head>
	<body>


		<?php
			echo "<span class='texto'> $texto </span>";

		?>



</body>
</html>