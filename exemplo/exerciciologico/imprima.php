<?php

$dados = array();
$dados[] = "peido pesa?"; 
$dados[] = "nao";
$dados[] = 10; 

foreach ($dados as $value) {
	if(!is_numeric($value))
		echo $value."<br />"; 

}
?>