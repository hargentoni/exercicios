<!-- Exercicio 4: Function for HTML

For this PHP exercise, first create an array called $months. 
Use the names of the months as keys, and the number of days for each month as values. 
For February, use the following for your value: "28 days, if leap year 29".

Next, write a function to create an option element for a form's select field. 
Make sure each option will be upper case. Both the array and the function should precede the HTML for the page.

Once again, you will be requesting user input. 
Create a form for the user with the request, "Please choose a month." Next, provide a select field with the months as options, 
looping through the array you created and using the function to create the option elements.

When the user clicks the submit button, return the statement "The month of $month has $number days.", 
where $month is the name of the month the user chose, and $number is the number of days. 
Be sure to include a different response for February.
-->


<?php
// Criando um Array
	$meses = array();
	$meses['Janeiro'] = 31;
	$meses['Fevereiro'] = '28 dias, 29 se for ano bissexto';
	$meses['Marco'] = 31;
	$meses['Abril'] = 30;
	$meses['Maio'] = 31;
	$meses['junho'] = 30;
	$meses['Julho'] = 31;
	$meses['Agosto'] = 31;
	$meses['Setembro'] = 30;
	$meses['Outubro'] = 31;
	$meses['Novembro'] = 30;
	$meses['Dezembro'] = 31;
//Função com paramentro, que vai criar os campos <option> através do foreach incorporado no HTML
	function option($str){
		echo "<option value=\"$str\">".$str."</option>\n";
	}



?>
<html>
	<head>
		<title>Function for HTML</title>
	</head>
	<body>
		<h2 align="center">Dias de um Mês</h2>
		<?php
			if (!isset($_POST['submit'])){
			 			 
		?>
			<form action="funcao_html.php" method="post">
				<p> Por favor escolha um mês </p>
				<select name="mes">
					<?php
					//Os <option> serão criados com o indice, que esta sendo enviado para a função option($str) através $k
						foreach ($meses as $k => $v) {
							option($k);
						}

					?>
					
				</select>
				<input type="submit" name="submit" value="Enviar">
			</form>
	<?php
		}else{
			//$mes vai receber o conteúdo do <select name'mes'>  
			$mes = $_POST['mes'];	
			if ($mes == 'Fevereiro') {
				// Se foi selecionado o mes de Fevereiro, mostre o valor correspondente do indice Fevereiro do Array $meses
				echo "O mês de Fevereiro tem ".$meses['Fevereiro'].".";
			}else{
				// Mostre o valor correspondete do indice escolhido no <select>.
				echo "O mês de $mes tem $meses[$mes] days";
			}
		}

	?>



	</body>
</html>
