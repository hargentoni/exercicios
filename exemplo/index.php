<html>
<head>

<!-- Tag com atributos quem vão chamar outra página dentro desta, sem a intervenção do usuário-->
<meta http-equiv="refresh" content="20" url="pagina2.php">
<!-- Tag Style, para utilizar um CSS incorporado-->
<!--<style type="text/css">
	A.meuslinks{ /* Elemento com classe */
	font-family:Comic Sans MS;
	text-decoration: none;
	color:blue

}
</style> -->
<!-- Tag Link, para chamar um CSS externo-->
<link rel="stylesheet" type="text/css" href="estilus.css">
</head>
<body>

<!-- Tag de cabeçalho e centralizar-->
<h1><center><blink>Caguei</blink></center></h1>


						<p><pre>texto</pre></p>
<!-- Tag de imagem-->
<img src="capeta.jpg">

<!-- Tag de listagem não ordenada, com tag de link-->
<ul>
	<li><a class="meuslinks" href="index.php">Home page</a></li>
	<li><a class="meuslinks" href="pagina2.php">Pagina 2</a></li>
	<li><a class="meuslinks" href="hells_bells.mp3">acdc</a></li>
</ul>

<!-- Tag de listagem ordenada-->
<div class="sidebar">
<ol>
	<li>carro</li>
	<li>bicicleta</li>
	<li>patinete</li>
</ol>
</div>

<!-- Tag para iniciar uma tabela-->
<table border="2" align="center">
<!-- Tag para indicar o título da tablea-->
<caption> nossa tabela </caption>
<!-- Tag <tr> defini a linha da tabela -->
<tr>
<!-- Tag <th> defini a coluna com o conteúdo em negrito -->
<!-- O atributo Align, defini o alinhamento do conteúdo das células, ou alinhamento da tabela -->
	<th>Nota/Alunos</th>
	<th>Tais</th>
	<th>Junior</th>
	<th>André</th>
</tr>

<tr>
	<th align="right">Notas</th>
<!-- Tag <td> defini a coluna da tabela -->
	<td align="left">10</td>
	<td align="center">10</td>
	<td align="right">10</td>
</tr>

</table>

<!-- Tag <form> cria um formulário, atributo action, define ação, por exemplo enviar para outra página, 
o method define de qual forma será enviado POST ou GET. name define o nome daquele formulário-->

<!-- DIV, utilizada para dividir por blocos -->
<div>
<form action="" method="" name="">
<!-- Tag <Input> define os campos do formulário e tem seus atributos, por exemplos o type, que define de que tipo será o dado inserido:
Radio, Texto, Password, botão, submit e etc.-->
	<input type="text" name="nome" size="10" value="texto"> <p>
	<input type="radio" name="avalia" value="Sim"> Sim <p>
	<input type="radio" name="avalia" value="Nao"> Não <p> 
	<input type="password" size="10" name="senha" maxlength="6">
	<input type="submit" value="enviar">
	<input type="reset" value="limpar">
	<input type="hidden" name="nome"value="limpar">
	<!-- Textarea, pode ser utilizado para criar um campo de comentário, necessário definir colunas e linhas-->
	<textarea name="nome" cols="10" rows="3">Comentário</textarea> <p>
	<!-- Select, utilizado para criar um campo com diversas opções para serem selecionada. Existem alguns atributos-->
	<select name="opcoes">
		<option> opção 1</option>
	</select>

</form>
</div>

<!-- Embed, é para adicionar música na página -->

<!-- <embed src="hells_bells.mp3"> -->

<frameset rows="20%","30%","50%">
	<frame src="frame.php" name="principal"></frame>
	<frame src="frame.php"></frame>
	<frame src="frame.php"></frame>
</frameset>

<FRAMESET COLS="20%,30%,50%">

<FRAME SRC="frame.php">

<FRAME SRC="frame.php">

<FRAME SRC="frame.php">

</FRAMESET>

</body>
</html>