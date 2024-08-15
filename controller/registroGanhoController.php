<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Ganhos.php'; 
require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/dao/GanhosDAO.php';

if(isset($_POST['valor']) && isset($_POST['descricao'])){

	if($_POST['valor'] === '' || $_POST['descricao'] === ''){
		
		print_r("<script>alert('Dados incompletos')</script>");

	}else{
		
		$valor = $_POST['valor'];
		$descricao = $_POST['descricao'];
		
		$ganho = new Ganhos($valor, $descricao);

		$ganhosDAO = GanhosDAO::getInstance();
		$registro = $ganhosDAO->insert($ganho);

		if($registro){
				header("Location: /lt_refrigeracaoDAO/controller/registroGanhoAlert.php");
				exit();
			}else{
				print_r("<script>alert('Falha no cadastro')</script>");
			}

		}
}
?>
