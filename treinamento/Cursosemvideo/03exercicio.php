<!DOCTYPE html>
<html>
	<head>
		<?php
			$nota1 = isset($_POST['nota1'])?$_POST['nota1']:"informe a nota1 <br/>";
			$nota2 = isset($_POST['nota2'])?$_POST['nota2']:"Informe a nota2 <br/>";
			$media = ($nota1+$nota2)/2;
		?>

		<style type="text/css">
			font.aprovado{
				font-size: 20pt;
				color: blue;
			}

			font.recuperacao{
				font-size: 20pt;
				color: yellow;
			}

			font.reprovado{
				font-size: 20pt;
				color: red;
			}

		</style>
		<title></title>
	</head>
	<body>
		<?php
			if ($media >= 7) {
				echo "A média entre $nota1 e $nota2 é igual a $media <br/>";
				echo "Situação do aluno: <font class='aprovado'/> Aprovado";
			}elseif ($media >= 5) {
				echo "A média entre $nota1 e $nota2 é igual a $media <br/>";
				echo "Situação do aluno: <font class='recuperacao'/> Recuperação";
			}else{
				echo "A média entre $nota1 e $nota2 é igual a $media <br/>";
				echo "Situação do aluno:<font class='reprovado'/> Reprovado";
			}
		?>



</body>
</html>