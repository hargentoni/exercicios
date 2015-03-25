<!DOCTYPE html>
<html>
	<head>
		<?php
			$nome = isset($_POST['nome'])?$_POST['nome']:"Nome não informado";
			$nasc = isset($_POST['nasc'])?$_POST['nasc']:"Idade não informada";
			$idade = date("Y") - $nasc;
		?>
		<title></title>
	</head>
	<body>
		<?php
			if ($idade >= 18) {
				echo "$nome tem $idade anos. <br/> Portando pode tirar a habilitação";
			}else{

				echo "$nome tem $idade anos. <br/> Portando nao pode tirar a habilitação";
				}
		?>



</body>
</html>