<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Usuario.php';

class UsuarioDAO{

	public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance)){
            self::$instance = new UsuarioDAO();
        }
        return self::$instance;
    }

    public function insert($usuario){
        try {
            $sql = "INSERT INTO Usuario(nome, email, senha) VALUES (:nome,:email,:senha)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: --- " . $e->getMessage();
            return false;
        }
    }

    public function update($usuario, $id){
        try {
            $sql = "UPDATE Usuario SET nome = :nome, email =:email, senha = :senha WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":id", $id);
            
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: --- " . $e->getMessage();
        }

    }

    public function delete($id){
        try {
            $sql = "DELETE FROM Usuario WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --- " . $e->getMessage();
        }
    }

    public static function usuario_existe($email, $senha){
        
        try{
            $sql = "SELECT Email, Senha FROM Usuario";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->execute();
            $usuarios = $p_sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($usuarios as $key => $usuario) {
                if(in_array($email, $usuario) && in_array($senha, $usuario)){
                    return true;
                } 
            }
            return false;



        }catch(Exception $e) {
            print "Erro ao executar a função: --- " . $e->getMessage();
        }
    }

    public static function getUsuarioNome($email){

        try{
            $sql = "SELECT nome FROM Usuario WHERE email = '$email'";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->execute();
            $usuario = $p_sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($usuario as $key => $value) {
                return $value['nome'];
            }
            return ' ';
        }catch(Exception $e){
            print "Erro ao executar a função: --- " . $e->getMessage();
        }
    }

    private function converterDadoParaObjeto($row){
        $obj = new Usuario("", "", "");
        $obj->setIdUsuario($row['id']);
        $obj->setNome($row['nome']);
        $obj->setEmail($row['email']);
        $obj->setSenha($row['senha']);
        return $obj;
    }

    public function listAll(){ 
        try{
            $sql = "SELECT * FROM Usuario";
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
