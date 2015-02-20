<?php

class Mysql{
private $host, $banco, $login, $senha; // variáveis privadas da classe
// função que será executada primeiro, quando for chamada atribuindo os valores nas variaveis da classe
public function __construct($host, $banco, $login, $senha){ 
	$this->host=$host; // vai atribuir o valor para a variavel da classe, quando a classe for instanciada no arquivo cadastrarbanco.php.
	$this->banco=$banco; //idem
	$this->login=$login; //idem
	$this->senha=$senha; //idem
}
private function connect(){ // função que vai realizar a conexão com o banco
	try{ // instanciando a classe PDO do PHP e informando o caminho do banco
		return new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->login, $this->senha); 
	}catch(Exception $e){
		echo "não foi possível conectar ao banco de dados";
	}
}// função do php que tem um paramentro que vai realizar a conexão com o banco e inserir a informações no mesmo
public function query($query){ 
	$con=$this->connect(); // $con esta chamando a função que conecta
	$stmt=$con->prepare($query); // $stmt esta recebendo a conexão e preparando o banco para receber informações
	return $stmt->execute(); // executando os passos anteriores.

}


}



?>