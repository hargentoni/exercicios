<!-- Laços de repetição while -->
<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>


		<form action='06exercicio.php' method='post' >
			<label for="iv1">Inicio:</label>
			<input type="number" name="v1" id="iv1"><br/>
			<label for="iv2">Fim:</label>
			<input type="number" name="v2" id="iv2"><br/>
			<label for="ii">Incremento:</label>
			<select name="incremento" id="ii">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><br/>
			<input type="submit" name="submit" value="Enviar">
		</form>
			
</body>
</html>

<?php
	$inicio = isset($_POST['v1'])?$_POST['v1']:"Informe o valor inicial <br/>";
	$fim = isset($_POST['v2'])?$_POST['v2']:"Informe o valor final <br/>";
	$salto = isset($_POST['incremento'])?$_POST['incremento']:1;

	if ($inicio <= $fim) {
		while ($inicio <= $fim) {
			echo $inicio."<br/>";
			$inicio+=$salto;
		}
	}else{
		while ($inicio >= $fim) {
			echo $inicio."<br/>";
			$inicio-=$salto;
				}
			}
	

?>