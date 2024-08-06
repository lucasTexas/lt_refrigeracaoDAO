<?php
	
	public class Servico{
		private $idServico;
		private $tipoServico;
		private $cliente;
		private $data;
		private $hora;
		private $localServico;

		function __construct($cliente){
			$this->cliente = $cliente;
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

		function toString(){
			return $this->cliente." ".$this->data." ".$this->hora;
		}


	}

?>
