<?php

class Gastos {
    private $idGastos;
    private $valor;
    private $descricao;

    public function __construct($valor, $descricao) {
        $this->valor = $valor;
        $this->descricao = $descricao;
    }

    
    public function getIdGastos() {
        return $this->idGastos;
    }

    public function setIdGastos($idGastos) {
        $this->idGastos = $idGastos;
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

    
    public function __toString() {
        return "Valor: " . $this->valor . 
               ", Descrição: " . $this->descricao;
    }
}

?>
