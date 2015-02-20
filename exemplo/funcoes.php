<link rel="stylesheet" type="text/css" href="estilus.css">
<?php 
// Operadores + condicionais

// função que calula o resto da divisão e mostra na tela se é par ou impar.
/*
function calculaParImpar($numero){
	if ($numero%2==0) {
		return "Par";
		}else{
			return "Impar";
		}
}

$x = calculaParImpar(10);
echo $x;
*/

// A função vai fazer um looping de 0 até 100 e se o valor de $i divido por 5, for igual a 0. Mostre na tela.
function pulaDeCinco(){
	for ($i=0; $i<=100 ; $i++) {
		if ($i%5==0) {
			echo $i."<br />";
		
		}
	}
}

// Função para descobri a idade de alguém.
function calculaIdade($anoNascimento){
	$anoAtual = date("Y"); // $anoAtual vai receber o valor do tipo date("Y") 
	$idade = $anoAtual - $anoNascimento; // $idade vai receber o calculo do $anoAtual - $anoNascimento
	return $idade; // Vai retorna/armazenar o resultado na variavel $idade
}
// variavel $helio vai receber a função calculaIdade informando o valor correspondente ao parâmentro da função ($anoNascimento)
$helio = calculaIdade(1987);
echo $helio; // Imprima $helio.

?>
