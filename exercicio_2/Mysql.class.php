<?php
//Criado a classe Mysql, que vai ter a estrutura para conectar e inserir os dados no banco de dados
class Mysql{
	private $banco, $host, $login, $senha;//criado a classe e suas propriedades (variaveis)

	public function __construct($host,$banco,$login,$senha){ // a função(metódo) Mysql esta montando a estrutura do objeto
		$this->banco=$banco;
		$this->host=$host;
		$this->login=$login;
		$this->senha=$senha;
	}
	
	private function connect(){ //A função connect vai retornar o acesso ao banco de dados ou não
		try{
			return new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->login, $this->senha); 
		}catch(Exception $e ){
			echo 'Não foi possivel conectar com o banco de dados';
		}
	}
/* Esta função vai buscar a conexão com o banco de dados com a variavel $con, que por sua vez, busca a função connect,
que tem a configuração de banco, nome, login e senha, para acessar o banco. $stmt vai receber a conexão do $con que vai
preparar o banco para receber os dados. Depois será retorna a execução da $stmt.*/
	public function query($query){ 
		$con = $this->connect();
		$stmt = $con->prepare($query);
		return $stmt->execute();
	}	

	public function select($query){ 
		$con = $this->connect();
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $con->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function selectAll($query){ 
		$con = $this->connect();
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $con->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}		
	
}
