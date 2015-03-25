<?php

	class CarrinhoCompras{
		var $itens;

		function AddItens($artigo, $num){
			$this->itens[$artigo]+=$num;	
		}
		
		function RemItens($artigo, $num){
			if ($this->itens[$itens] > $num) {
				$this->itens[$itens]-= $num;
			}else{
				return false;
			}
		}
	}

	$carrinho = new CarrinhoCompras;
	$carrinho->AddItens("10",1);

	$carrinho1 = new CarrinhoCompras;
	$carrinho1->RemItens("0815",3);

?>



