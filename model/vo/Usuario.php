<?php
	
	class Usuario{
		private $idUsuario;
		private $nome;
		private $email;
		private $senha;

		function __construct($nome, $email, $senha){
			$this->nome = $nome;
			$this->email = $email;
			$this->senha= $senha;
		}

		function getIdUsuario(){
			return $this->idUsuario;
		}
		function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}

		function getNome(){
			return $this->nome;
		}
		function setNome($nome){
			$this->nome = $nome;
		}

		function getEmail(){
			return $this->email;
		}
		function setEmail($email){
			$this->email = $email;
		}

		function getSenha(){
			return $this->senha;
		}
		function setSenha($senha){
			$this->senha = $senha;
		}

		function toString(){
			return $this->email;
		}


	}

?>
