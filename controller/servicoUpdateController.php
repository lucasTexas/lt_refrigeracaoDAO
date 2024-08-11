<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Servico.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ServicoDAO.php';

$tipoServico = $_POST['tipo_servico'];
$cliente = $_POST['cliente'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$localServico = $_POST['local_servico'];

$servicoDAO = ServicoDAO::getInstance();
$servico = new Servico($tipoServico, $cliente, $data, $hora, $localServico);

$update = $servicoDAO->update($servico);

if ($update){

	header("Location: /lt_refrigeracaoDAO/controller/servicoUpdateAlert.php");
	exit();
}
