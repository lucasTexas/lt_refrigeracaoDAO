<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Gastos.php'; 
require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/dao/GastosDAO.php';

if(isset($_POST['valor']) && isset($_POST['descricao'])){

	if($_POST['valor'] === '' || $_POST['descricao'] === ''){
		
		print_r("<script>alert('Dados incompletos')</script>");

	}else{
		
		$valor = $_POST['valor'];
		$descricao = $_POST['descricao'];
		
		$gasto = new Gastos($valor, $descricao);

		$gastosDAO = GastosDAO::getInstance();
		$registro = $gastosDAO->insert($gasto);

		if($registro){
				header("Location: /lt_refrigeracaoDAO/controller/registroGastoAlert.php");
				exit();
			}else{
				print_r("<script>alert('Falha no cadastro')</script>");
			}

		}
}
?>
