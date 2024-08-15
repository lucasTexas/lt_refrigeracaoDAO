<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/UsuarioDAO.php';


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$id = $_POST['id'];

$usuarioDAO = UsuarioDAO::getInstance();
$usuario = new Usuario($nome, $email, $senha);

$update = $usuarioDAO->update($usuario, $id);

if ($update){

	header("Location: /lt_refrigeracaoDAO/controller/usuarioUpdateAlert.php");
	exit();
}
