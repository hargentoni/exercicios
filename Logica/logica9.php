<?php

//Calcule a média aritmética das 3 notas de um aluno e mostre, além do valor da média, uma mensagem de "Aprovado", caso a média
//... seja igual ou superior a 6, ou a mensagem "reprovado", caso contrário.

$nota = array();
$nota['nota1'] = 4;
$nota['nota2'] = 5;
$nota['nota3'] = 8;

$media = ($nota['nota1']+$nota['nota2']+$nota['nota3'])/3;

echo"Sua media foi: ".$media."<br />";

if($media>=6){
	echo "<font color ='blue'>Aprovado </font>";
}else{
	echo"<font color='red'> Reprovado </font>";
}

?>