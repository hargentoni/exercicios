<?php
// isset (se essa variavel existe ou se ela esta criada/setada) REQUEST = Pega informação tanto do GET ou POST
// Se ninguém clicou em enviar ainda, aparece o formulário. Isso é o que a linha do if esta dizendo.
if (!isset($_REQUEST['submit'])):
?>
<form action="index.php" method="post">
Nome: <input type="text" name="nome" value="" /><br />
Email: <input type="text" name="email" value="" /><br />
Telefone: <input type="text" name="telefone" value="" /><br />
Assunto: <input type="text" name="assunto" value="" /><br />
Mensagem: <br />
<textarea name="mensagem" cols="40" rows="5"></textarea><br />
<input type="submit" name="submit" value="Enviar">
</form>


<!-- Se não, se clicaram no botão enviar apareça Dados Enviado.-->
<?php else: ?>
<!-- <?php 
	// A variavel $mensagem, esta recebendo uma mensagem e esta concatenando-a com os demais valores que estão sendo puxados do formulário e atribuido a ela.
/*	$mensagem = "Dados enviados via formulário \n\n";
	$mensagem.= "Nome ".$_REQUEST['nome']."\n";
	$mensagem.= "Email ".$_REQUEST['email']."\n";
	$mensagem.= "Telefone ".$_REQUEST['telefone']."\n";
	$mensagem.= "Mensagem ".$_REQUEST['mensagem']."\n";
	$header = "From: ".$_REQUEST['email']."\n"; // $header é o cabeçalho da mensagem. No caso esta pegando o valor email do formulario
	// Função mail, utilizada para enviar para um email o conteúdo.
	mail('helio.junior@b2agencia.com.br',$_REQUEST['assunto'],$mensagem,$header); // A função esta puxando o valor assunto... 
	//...do formulário e enviando junto com a mensagem e o cabeçalho para o email informado na função

*/?> -->

	<?php echo $_REQUEST['nome'];?>, seus dados foram enviados 
<?php endif; ?>

