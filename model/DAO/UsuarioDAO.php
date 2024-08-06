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
            $p_sql->bindValue(":email", $Usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: --- " . $e->getMessage();
        }
    }

    public function update($usuario){
        try {
            $sql = "UPDATE Usuario SET nome = :nome, email =:email, senha = :senha";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $senha->getSenha());
            
            //critografando a senha para md5, asism o usuário terá mais segurança, já que frequentemente usamos a mesma senha para diversas aplicações.
            $p_sql->bindValue(":senha", md5($usuario->getSenha()));
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: --- " . $e->getMessage();
        }

    }

    public function delete($email){
        try {
            $sql = "DELETE FROM Usuario WHERE email = :email";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":email", $email);
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
                return false;
            }



        }catch(Exception $e) {
            print "Erro ao executar a função: --- " . $e->getMessage();
        }






















        /*

        $query = "SELECT Email, Senha FROM Usuario";

        $result = pg_query($connection, $query);

         while ($row = pg_fetch_assoc($result)) {
            $results[] = $row;
        }

        foreach($results as $i){
            if(in_array($email, $i) && in_array($senha, $i)){
                return true;
            }
        }
        return false;*/

}



}

?>
