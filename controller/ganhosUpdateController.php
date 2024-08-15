<?php 
session_start();

if(!isset($_SESSION['user'])){
	header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
	exit();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Ganhos.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/GanhosDAO.php';

$ganhosDAO = GanhosDAO::getInstance();

// Atualizando os dados do ganho
$ganho = new Ganhos($_POST['valor'], $_POST['descricao']);
$update = $ganhosDAO->update($ganho, $_POST['id']);

if ($update) {
	header("Location: /lt_refrigeracaoDAO/controller/ganhosUpdateAlert.php");
	exit();
} else {
	echo "Erro ao atualizar o ganho. Tente novamente.";
}
