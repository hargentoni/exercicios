<?php
include('conexao.php');
// Selecione tudo da tabela cliente
$sql = "Select * from cliente";
// Receba o resultado da seleção/pesquisa de $sql e execute
$res = mysql_query($sql);
// Se o numero de linha da consulta feita for maior que 0, faça.
if (mysql_num_rows($res) > 0) {
	//De 0 até o número de registros, feito pela consulta
	for ($i=0; $i < mysql_num_rows($res); $i++) {
	//Imprima a consulta, o numero do registro e a coluna.
		echo mysql_result($res, $i, 'nome')." ". mysql_result($res, $i, 'sobrenome')."<br />";
	}
}else
	echo "Nenhum registro encontrado";

?>