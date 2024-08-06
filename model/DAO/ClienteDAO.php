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

    public function update($cliente){
        try {
            $sql = "UPDATE Cliente SET nome = :nome, telefone =:telefone";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $cliente->getNome());
            $p_sql->bindValue(":telefone", $cliente->getTelefone());
            
            //critografando a senha para md5, asism o usuário terá mais segurança, já que frequentemente usamos a mesma senha para diversas aplicações.
            #$p_sql->bindValue(":senha", md5($usuario->getSenha()));
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: --- " . $e->getMessage();
        }

    }

    public function delete($email){
        try {
            $sql = "DELETE FROM Cliente WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --- " . $e->getMessage();
        }
    }


}

?>
