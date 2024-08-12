<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Cliente.php';

class ClienteDAO{

	public static $instance;

    private function __construct() {
        
    }

    public static function getInstance(){
        if (!isset(self::$instance))
            self::$instance = new ClienteDAO();

        return self::$instance;
    }

    public function insert($cliente){
        try {
            $sql = "INSERT INTO Cliente(nome, telefone) VALUES (:nome, :telefone)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $cliente->getNome());
            $p_sql->bindValue(":telefone", $cliente->getTelefone());
            return $p_sql->execute();
        } catch (Exception $e){
            print "Erro ao executar a função de salvar: --- " . $e->getMessage();
        }
    }

    public function update($cliente, $telefoneAntigo){
        try {
            $sql = "UPDATE Cliente SET nome = :nome, telefone =:telefone WHERE telefone = :telefoneAntigo";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $cliente->getNome());
            $p_sql->bindValue(":telefone", $cliente->getTelefone());
            $p_sql->bindValue(":telefoneAntigo", $telefoneAntigo);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: --- " . $e->getMessage();
        }

    }

    public function delete($telefone){
        try {
            $sql = "DELETE FROM Cliente WHERE telefone = :telefone";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":telefone", $telefone);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --- " . $e->getMessage();
        }
    }

    private function converterDadoParaObjeto($row){
        $obj = new Cliente("", "");
        $obj->setIdCliente($row['id']);
        $obj->setNome($row['nome']);
        $obj->setTelefone($row['telefone']);
        return $obj;
    }

    public function listAll(){ //continuar a partir daqui
        try{
            $sql = "SELECT * FROM Cliente";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->execute();

            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterDadoParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        }catch(Exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

}

?>
