 <?php
  include_once('../exercicio_2/Mysql.class.php'); //executando a classe de outros projeto
  $mysql = new Mysql("localhost","exercicios", "root", ""); //passando o caminho com as informações para se conectar ao banco

  $resultado = $mysql->select("SELECT * FROM estoque");
 ?>   
<?php include_once("container/header.html");?>
<?php include_once("container/navbar.html");?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Estoque<span class="sr-only">(current)</span></a></li>
            <li><a href="http://exercicio.local/admin/produtos.php">Adicionar Produtos</a></li>
            <li><a href="#">Itens Vendidos</a></li>
            <!--<li><a href="#">Export</a></li>-->
          </ul>
         <!-- <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul> -->
          <!--<ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>-->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Sistema de Estoque</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Produto</th>
                  <th>Tipo</th>
                  <th>Qtd</th>
                  <th>Valor</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($resultado as $posicao => $valor) {?>
                <tr>
                  <td><?php echo $valor['Id'];?></td>
                  <td><?php echo $valor['Produto'];?></td>
                  <td><?php echo $valor['Tipo'];?></td>
                  <td><?php echo $valor['Qtd'];?></td>
                  <td><?php echo $valor['Valor'];?></td>
                  <td></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php include_once("container/rodape.html");?>


