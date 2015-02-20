<?php

class MysqlClass{

	private $host, $banco, $login, $senha;

	public function _contruct($host, $banco, $login, $senha){
		$this->host=$host;
		$this->banco=$banco;
		$this->login=$login;
		$this->senha=$senha;

	}

	private function conectar(){
try{
	return new Conectar('mysql:host={$this->host};dbname{$this->banco}', $this->login, $this->senha);

}catch(Exception $e){
	echo "Não foi possível conectar com o banco de dados. ";
}	

}


public function query($query){ 
		$con = $this->connect();
		$stmt = $con->prepare($query);
		return $stmt->execute();

}
}




?>
