<?php
// isset (se essa variavel existe ou se ela esta criada/setada) REQUEST = Pega informação tanto do GET ou POST
// Se ninguém clicou em enviar ainda, aparece o formulário. Isso é o que a linha do if esta dizendo.
if (!isset($_REQUEST['submit'])):
?>
<!-- Utlizando no campo name de cada campo do formulário d[] que é um Array. Quando for imprimir ou armazenar no banco os valores dos campos. Será preciso chamar apenas a variavel referente ao Array. -->
<form action="array.php" method="post">
Nome: <input type="text" name="d[nome]" value="" /><br />
Email: <input type="text" name="d[email]" value="" /><br />
Telefone: <input type="text" name="d[telefone]" value="" /><br />
Assunto: <input type="text" name="d[assunto]" value="" /><br />
Mensagem: <br />
<textarea name="d[mensagem]" cols="40" rows="5"></textarea><br />
<input type="submit" name="submit" value="Enviar">
</form>

<?php else: ?>

	<?php print_r($_REQUEST['d']);  // utilizando Array no formulário. print_r(); é o comando para imprimir Array?>
<?php endif; ?>