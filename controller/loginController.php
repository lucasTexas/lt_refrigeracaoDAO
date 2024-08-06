<?php

require  $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Usuario.php'; 
require  $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/UsuarioDAO.php';

session_start();

//Esse bloco serve para verificar se o usuário está correto e redirecionar para a página de home
if(isset($_POST['email']) && isset($_POST['senha'])){
	if(UsuarioDAO::usuario_existe($_POST['email'], $_POST['senha'])){
		$_SESSION['user'];
		header("Location:". $_SERVER['DOCUMENT_ROOT'] . "lt_refrigeracaoDAO/view/home.php");
		exit();
	}else{
		print_r("<script>alert('Email e/ou senha incorretos')</script>");
	}
}
?>
