<?php 
session_start();

if(!isset($_SESSION['user'])){
	header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
	exit();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Gastos.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/GastosDAO.php';

$gastosDAO = GastosDAO::getInstance();

// Atualizando os dados do gasto
$gasto = new Gastos($_POST['valor'], $_POST['descricao']);
$update = $gastosDAO->update($gasto, $_POST['id']);

if ($update) {
	header("Location: /lt_refrigeracaoDAO/controller/gastosUpdateAlert.php");
	exit();
} else {
	echo "Erro ao atualizar o gasto. Tente novamente.";
}
