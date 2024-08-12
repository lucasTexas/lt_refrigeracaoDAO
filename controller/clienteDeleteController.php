<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Cliente.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ClienteDAO.php';

$clienteDAO = ClienteDAO::getInstance();

$delete = $clienteDAO->delete($_POST['telefone']);

if ($delete){

	header("Location: /lt_refrigeracaoDAO/controller/clienteDeleteAlert.php");
	exit();
}
