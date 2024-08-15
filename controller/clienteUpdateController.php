<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Cliente.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ClienteDAO.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$id = $_POST['id'];

/*print_r($id);
print_r($nome);
print_r($telefone);*/

$clienteDAO = ClienteDAO::getInstance();
$cliente = new Cliente($nome, $telefone);

$update = $clienteDAO->update($cliente, $id);

if ($update){

	header("Location: /lt_refrigeracaoDAO/controller/clienteUpdateAlert.php");
	exit();
}
