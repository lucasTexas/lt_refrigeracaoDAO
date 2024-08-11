<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Servico.php'; 
require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/ServicoDAO.php';

if(isset($_POST['tipo_servico']) && isset($_POST['cliente']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['local_servico'])){

	if($_POST['tipo_servico'] === '' || $_POST['cliente'] === '' || $_POST['data'] === '' || $_POST['hora'] === '' || $_POST['local_servico'] === ''){
		
		print_r("<script>alert('Dados incompletos')</script>");

	}else{
		
		$tipoServico = $_POST['tipo_servico'];
		$cliente = $_POST['cliente'];
		$data = $_POST['data'];
		$hora = $_POST['hora'];
		$localServico = $_POST['local_servico'];
		$servico = new Servico($tipoServico, $cliente, $data, $hora, $localServico);

		$servicoDAO = ServicoDAO::getInstance();
		$reserva = $servicoDAO->insert($servico);

		if($reserva){
				header("Location: /lt_refrigeracaoDAO/controller/reservaServicoAlert.php");
				exit();
			}else{
				print_r("<script>alert('Falha no cadastro')</script>");
			}

		}
}
