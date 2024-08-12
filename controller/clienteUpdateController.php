<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Cliente.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ClienteDAO.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$telefoneAntigo = $_POST['telefoneAntigo'];


$clienteDAO = clienteDAO::getInstance();
$cliente = new Cliente($nome, $telefone);

$update = $clienteDAO->update($cliente, $telefoneAntigo);

if ($update){

	header("Location: /lt_refrigeracaoDAO/controller/clienteUpdateAlert.php");
	exit();
}
