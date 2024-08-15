<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/UsuarioDAO.php';

$usuarioDAO = UsuarioDAO::getInstance();

$delete = $usuarioDAO->delete($_POST['id']);

if ($delete){

	header("Location: /lt_refrigeracaoDAO/controller/usuarioDeleteAlert.php");
	exit();
}
