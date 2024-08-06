<?php
	
	public class Cliente{
		private $idCliente;
		private $nome;
		private $telefone;

		function getIdCliente(){
			return $this->idCliente;
		}
		function setIdCliente($idCliente){
			$this->idCliente = $idCliente;
		}

		function getNome(){
			return $this->nome;
		}
		function setNome($nome){
			$this->nome = $nome;
		}

		function getTelefone(){
			return $this->telefone;
		}
		function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		function toString(){
			return $this->nome;
		}


	}

?>
