<?php

require_once  $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Usuario.php'; 
require_once  $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/UsuarioDAO.php';

session_start();

//Esse bloco serve para verificar se o usuário está correto e redirecionar para a página de home
if(isset($_POST['email']) && isset($_POST['senha'])){
	if(UsuarioDAO::usuario_existe($_POST['email'], $_POST['senha'])){
		$_SESSION['user'] = $_POST['email'];
		header("Location: /lt_refrigeracaoDAO/view/php/home.php");
		exit();
	}else{
		header("Location: /lt_refrigeracaoDAO/controller/loginAlertLoginController.php");
		exit();
	}
}
?>
