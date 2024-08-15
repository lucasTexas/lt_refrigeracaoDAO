<?php
	
	class Ganhos{
		private $idGanhos;
		private $valor;
		private $descricao;

		function __construct($valor, $descricao){
			$this->valor = $valor;
			$this->descricao = $descricao;
		}


	    public function getIdGanhos() {
	        return $this->idGanhos;
	    }

	    public function setIdGanhos($idGanhos) {
	        $this->idGanhos = $idGanhos;
	    }

	    public function getValor() {
	        return $this->valor;
	    }

	    public function setValor($valor) {
	        $this->valor = $valor;
	    }

	    public function getDescricao() {
	        return $this->descricao;
	    }

	    public function setDescricao($descricao) {
	        $this->descricao = $descricao;
	    }

	    // toString
	    public function __toString() {
	        return "Valor: " . $this->valor . 
	               ", Descrição: " . $this->descricao;
	    }

}

?>
