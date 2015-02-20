<?php
$dados = array();
$dados[] = "peido pesa?";
$dados[] = "nao";
$dados[] = 10; 

foreach ($dados as $key => $value) {
	if(!is_numeric($value))
		echo $value; // imprimindo  valor

}
?>