<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Servico.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ServicoDAO.php';

$servicoDAO = ServicoDAO::getInstance();

$delete = $servicoDAO->delete($_POST['data'], $_POST['hora']);

if ($delete){

	header("Location: /lt_refrigeracaoDAO/controller/servicoDeleteAlert.php");
	exit();
}
