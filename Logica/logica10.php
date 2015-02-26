<?php
//10. Elaborar um algoritmo que lê 3 valores a,b,c e os escreve. A seguir, encontre o maior dos 3 valores e 
//...o escreva com a mensagem : "É o maior "
$a = 10;
$b = 5;
$c = 12;

echo "O A é: ".$a."<br />";
echo "O B é: ".$b."<br />";
echo "O C é: ".$c."<br />";

if($a>$b){
	if ($a>$c) {
		echo "O maior valor é: ".$a;
	}else
	echo "O maior valor é: ".$c;
}else
	if ($b>$c) {
		echo "O maior valor é: ".$b;
	}else
	echo "O maior valor é: ".$c;




?>