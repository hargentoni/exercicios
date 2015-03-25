/*
1- Você pode dar um IF por exemplo:

{if $name == "Fred"}
	Welcome Sir.
{elseif $name == "Wilma"}
	Welcome Ma'am
{else}
	Welcome, whatever you are.
{/if}

2- incluir um outro arquivo template dentro de um outro arquivo template:

{include file="rodape.tpl"}

3- Você pode criar variáveis dentro do template:

{assign var="nome" value="Bob"}

O valor de $nome {$nome}
*/