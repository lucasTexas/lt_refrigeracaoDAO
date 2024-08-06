<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Servico.php';

class ServicoDAO{

	public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new ServicoDAO();

        return self::$instance;
    }

    public function insert($servico){
        try {
            $sql = "INSERT INTO Servico(tipo_servico, data, hora, local_servico, cliente) VALUES (:tipo_servico, :data, :hora, :local_servico, :cliente)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":tipo_servico", $servico->getTipoServico());
            $p_sql->bindValue(":data", $servico->getData());
            $p_sql->bindValue(":hora", $servico->getHora());
            $p_sql->bindValue(":local_servico", $servico->getLocalServico());
            $p_sql->bindValue(":cliente", $servico->getCliente());
            return $p_sql->execute();
        } catch (Exception $e){
            print "Erro ao executar a função de salvar: --- " . $e->getMessage();
        }
    }

    public function update($servico){
        try {
            $sql = "UPDATE Servico SET tipo_servico = :tipo_servico, data =:data, hora = :hora, local_servico = :local_servico, cliente = :cliente";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":tipo_servico", $servico->getTipoServico());
            $p_sql->bindValue(":data", $servico->getData());
            $p_sql->bindValue(":hora", $servico->getHora());
            $p_sql->bindValue(":local_servico", $servico->getLocalServico());
            $p_sql->bindValue(":cliente", $servico->getCliente());
            
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
            $sql = "DELETE FROM Servico WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --- " . $e->getMessage();
        }
    }

	
}

?>
