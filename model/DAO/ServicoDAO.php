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

    public function update($servico, $data, $hora){
        try {
            $sql = "UPDATE Servico SET tipo_servico = :tipo_servico, data =:data, hora = :hora, local_servico = :local_servico, cliente = :cliente WHERE data = :dataAntiga AND hora = :horaAntiga";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":tipo_servico", $servico->getTipoServico());
            $p_sql->bindValue(":data", $servico->getData());
            $p_sql->bindValue(":hora", $servico->getHora());
            $p_sql->bindValue(":local_servico", $servico->getLocalServico());
            $p_sql->bindValue(":cliente", $servico->getCliente());
            $p_sql->bindValue(":dataAntiga", $data);
            $p_sql->bindValue(":horaAntiga", $hora);
            //$p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: --- " . $e->getMessage();
        }

    }

    public function delete($data, $hora){
        try {
            $sql = "DELETE FROM Servico WHERE data = :data AND hora = :hora";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":data", $data);
            $p_sql->bindValue(":hora", $hora);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --- " . $e->getMessage();
        }
    }

    private function converterDadoParaObjeto($row){
        $obj = new Servico("", "", "", "", "", "");
        $obj->setIdServico($row['id']);
        $obj->setTipoServico($row['tipo_servico']);
        $obj->setCliente($row['cliente']);
        $obj->setData($row['data']);
        $obj->setHora($row['hora']);
        $obj->setLocalServico($row['local_servico']);
        return $obj;
    }

    public function listAll(){ //continuar a partir daqui
        try{
            $sql = "SELECT * FROM Servico";
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
