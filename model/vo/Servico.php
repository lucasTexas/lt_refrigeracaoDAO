<?php
	
	class Servico{
		private $idServico;
		private $tipoServico;
		private $cliente;
		private $data;
		private $hora;
		private $localServico;

		function __construct($tipoServico, $cliente, $data, $hora, $localServico){
			$this->tipoServico = $tipoServico;
			$this->cliente = $cliente;
			$this->data = $data;
			$this->hora = $hora;
			$this->localServico = $localServico;
		}

		function getIdServico(){
			return $this->idServico;
		}
		function setIdServico($idServico){
			$this->idServico = $idServico;
		}

		function getTipoServico(){
			return $this->tipoServico;
		}
		function setTipoServico($tipoServico){
			$this->tipoServico = $tipoServico;
		}

		function getCliente(){
			return $this->cliente;
		}
		function setCliente($cliente){
			$this->cliente = $cliente;
		}

		function getData(){
			return $this->data;
		}
		function setData($data){
			$this->data = $data;
		}

		function getHora(){
			return $this->hora;
		}
		function setHora($hora){
			$this->hora = $hora;
		}

		function getLocalServico(){
			return $this->localServico;
		}
		function setLocalServico($localServico){
			$this->localServico = $localServico;
		}

		function toString(){
			return $this->cliente." ".$this->data." ".$this->hora;
		}


	}

?>
