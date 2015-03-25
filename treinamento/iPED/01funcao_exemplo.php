<?php
	function formataNumero($num){
		$monitario = number_format($num,2,",",".");
		$formatado = "R$ ".$monitario;

		// Guarda os valores e retorna para a variável que fez a chamada da função
		return $formatado;
	}

$numero = formataNumero(2000.58);
echo $numero;

?>