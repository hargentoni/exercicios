<?php
try{
	$con = new PDO("mysql:host=localhost;dbname=cadastro", "root","");
}catch (Exception $e){
	echo "Não foi possível conectar no banco de dados cadastro";
}
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>