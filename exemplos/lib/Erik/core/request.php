<?php
namespace Erik\core; class request{
	function data(){
		$retorno['post'] = $this->post();
		$retorno['get'] = $this->get();

		return $retorno;
	}
	function post(){
		$retorno=array();
		foreach($_POST as $key=>$value){
			$retorno[$key]=$this->securityVar($value);
		}
		return $retorno;
	}
	function get(){
		$retorno['parametros']=array();
		foreach ($_GET as $value) {
			$retorno['parametros'][]=$this->securityVar($valeu);
		}
		return retorno;

	}
	function securityVar($var){
		$var = addslashes($var);
		return $var;
	}
}

?>
