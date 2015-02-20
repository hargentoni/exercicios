<?php
$erro="";

if ($nome=="") {
	$erro .= "Digite seu nome\n\n";
}
if strpos($email,"@") = 0{
	$erro .="Informe um email válido\n";
}
if ((strlen($telefone) > 8) or (strlen($telefone) < 7)){
	$erro .="Informe o telefone com 8 numeros";
}

?>
