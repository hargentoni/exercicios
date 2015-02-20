<?php

// Array
$dados = array();
$dados[0][0] = "Doceria Careca";
$dados[0][1] = "Doces";
$dados[0][2]= 10;

print_r($dados);

//Array com indices ou sub-Indices
$dados1 = array();
$dados1[0][0] = "Cabeleireiro";
$dados1[0][1] = "Escova";
$dados1[0][2]= 30;

$dados1[1][0] = "Bar DonaDora";
$dados1[1][1] = "Bebidas";
$dados1[1][2]= 20;


print_r($dados1);

//Array associativo, onde o indices não é mais um número e sim um valor.
// Também posso criar esse mesmo tipo de array com um sub-indices ex. $dados2[0]['empresa'] = "casa do pao"; Seguindo o mesmo...
//... exemplo de cima
$dados2 = array();
$dados2['empresa'] = "Casa do Pao de queijo";
$dados2['slogan'] = "Coma o melhor pao de quiejo";
 
print_r($dados2);

//Outra forma de definir um Array associativo
// O que faz => É usado quando queremos ligar um indice/chave a um valor.
$dados3 = array('empresa' => 'Bar do Joao', 'slogan' => 'beba');

print_r($dados3);

// Array com o laço de repetição Foreach

$dados4 = array();
$dados4[] = "Casa da Maria";
$dados4[] = "Costureira";

// legenda do foreach = Paracada(indice/key de $dados4 atribua o valor para $v)
foreach($dados4 as $v){
	echo $v."\n\n";
} 

//Caso eu queira imprimir também a Key/chave/indice + o valor
$dados5 = array();
$dados5[] = "Casa da Tais";
$dados5[] = "Nutricionista";
// legenda = Paracada(A chave pegue a chave => e $v pega o valor da chave)
foreach ($dados5 as $k => $v) {
	echo $k.": ".$v."\n";
}
?>