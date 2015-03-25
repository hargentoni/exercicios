<?php
	session_start();
		if (!$_SESSION['logado']) {
			header("location: login.html");
			die;
		}

?>



Criar banco

CREATE DATABASE "nome do banco"
CREATE TABLE "nome da tabela"

Selecionar dados

SELECT * FROM nome da tabela WHERE "condição"
SELECT campo1, campo2 FROM nome_da_tabela WHERE campo1="abc";

Atualizar/alterar dados

UPDATE tabela SET campo1="val1", campo2="val2" WHERE "condição";

Deletar dados

DELETE datapoint FROM tabela WHERE condição;