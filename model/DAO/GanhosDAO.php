<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Ganhos.php';

class GanhosDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance(){
        if (!isset(self::$instance))
            self::$instance = new GanhosDAO();

        return self::$instance;
    }

    public function insert($ganho){
        try {
            $sql = "INSERT INTO ganhos(valor, descricao) VALUES (:valor, :descricao)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":valor", $ganho->getValor());
            $p_sql->bindValue(":descricao", $ganho->getDescricao());
            return $p_sql->execute();
        } catch (Exception $e){
            print "Erro ao executar a função de salvar: --- " . $e->getMessage();
        }
    }

    public function update($ganho, $id){
        try {
            $sql = "UPDATE ganhos SET valor = :valor, descricao = :descricao WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":valor", $ganho->getValor());
            $p_sql->bindValue(":descricao", $ganho->getDescricao());
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: --- " . $e->getMessage();
        }

    }

   public function delete($id){
        try {
            $sql = "DELETE FROM ganhos WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --- " . $e->getMessage();
        }
    }

    private function converterDadoParaObjeto($row){
        $obj = new Ganhos(0, "");
        $obj->setIdGanhos($row['id']); 
        $obj->setValor($row['valor']);
        $obj->setDescricao($row['descricao']);
        return $obj;
    }

    public function listAll(){
        try{
            $sql = "SELECT * FROM ganhos";
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
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }



}

?>
