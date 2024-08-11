<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Usuario.php'; 
require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/UsuarioDAO.php';

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
	if($_POST['nome'] === null || $_POST['email'] === null || $_POST['senha'] === null){
			print_r("<script>alert('Dados incompletos')</script>");
		}else{
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$usuario = new Usuario($nome, $email, $senha);

			$usuarioDAO = UsuarioDAO::getInstance();
			$cadastro = $usuarioDAO->insert($usuario);

			if($cadastro){
				header("Location: /lt_refrigeracaoDAO/controller/cadastroUsuarioAlert.php");
				exit();
			}else{
				print_r("<script>alert('Falha no cadastro')</script>");
			}

		}

	
	
	
}