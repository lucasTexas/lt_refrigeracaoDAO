<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Cliente.php'; 
require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/ClienteDAO.php';


if(isset($_POST['nome']) && isset($_POST['telefone'])){

	if($_POST['nome'] === '' || $_POST['telefone'] === ''){
		
		print_r("<script>alert('Dados incompletos')</script>");

	}else{
		
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		
		$cliente = new Cliente($nome, $telefone);

		$clienteDAO = ClienteDAO::getInstance();
		$registro = $clienteDAO->insert($cliente);

		if($registro){
				header("Location: /lt_refrigeracaoDAO/controller/registroClienteAlert.php");
				exit();
			}else{
				print_r("<script>alert('Falha no cadastro')</script>");
			}

		}
}
