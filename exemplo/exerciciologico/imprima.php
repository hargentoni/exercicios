<?php
$dados = array();
$dados[] = "peido pesa?"; //caraca cara
$dados[] = "nao";//heliodoidao
$dados[] = 10; 

foreach ($dados as $key => $value) {
	if(!is_numeric($value))
		echo $value; // imprimindo  valor

}
?>