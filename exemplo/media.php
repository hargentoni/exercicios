

<link rel="stylesheet" type="text/css" href="estilus.css">
<?php 
// Operadores + condicionais

// função que vai calcular a média
function calculaMedia(){

$nota1 = $_POST['nota1']; // vai receber o valor do campo name do formulário html
$nota2 = $_POST['nota2']; // vai receber o valor do campo name do formulário html
return ($nota1 + $nota2)/2; // vai retorna o valor calculado
}

$media = calculaMedia(); // vai armazenar na variável $media, o valor final, calculado na função. 
echo "<b>Media: </b>".$media."<br />";

if ($media==10) {
	echo "<b>Status:</b><font class='aprovado'> Aprovado - Meus Parabens </font> ";
}elseif ($media>=7) {
	echo "<b>Status:</b><font class='aprovado'> Aprovado - Muito Bom </font> ";
}elseif ($media>=5) {
	echo "<b>Status:</b><font class='aprovado'> Aprovado - Bom </font> ";
}else{
	echo "<b>Status:</b><font class='reprovado'> Reprovado </font> ";
}

?>