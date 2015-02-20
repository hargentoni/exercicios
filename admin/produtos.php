<?php include_once("container/header.html");?>
<?php include_once("container/navbar.html");?>
<style type="text/css">

body {
  background-color: #eee;
}

.form-control {
  max-width: 300px;
  padding: 15px;
  margin: 0 auto;
}
.formulario{
  max-width: 350px;
  padding-top: 45px;
  margin: 0 auto;
}




</style>

<form action="cadastrarProduto.php" method="POST" class="formulario">
	<div class="form-group">
		<label for="produto">Produto</label><br>
		<input type="text" name="produto" class="">
	</div>
	<div class="form-group">
		<label for="tipo">Tipo</label><br>
		<input type="text" name="tipo">
	</div>
	<div class="form-group">
		<label for="qtd">Qtd</label><br>
		<input type="text" name="qtd" class="number">
	</div>
	<div class="form-group">
		<label for="valor">Valor</label><br>
		<input type="float" name="valor">
	</div>
	<div>	
		<label for="vendido">Vendido</label><br>
		<input type="number" name="vendido">
	</div>
	<br>
	<button type="submit" class="btn btn-default" value="teste">Enviar</button>

</form>





<?php include_once("container/rodape.html");?>
