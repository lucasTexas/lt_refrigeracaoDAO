<!DOCTYPE HTML>

<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ServicoDAO.php';

?>

<html>

	<head>

		<title>Agenda</title>
		<meta charset="utf-8">
		<!--
		<link rel="stylesheet" type="text/css" href="/lt_refrigeracaoDAO/view/css/agenda.css"> 
		-->
		<?php
		print_r("<style>
	        table {
	            width: 100%;
	            border-collapse: collapse;
	        }
	        th, td {
	            border: 1px solid black;
	            text-align: center;
	            padding: 8px;
	        }
	        
	    </style>");
	    ?>

	</head>

	<body>

		
		<nav id="menu">
			<object data="pinguim_LT.png" id="logoImage"></object>
			
			<a href="home.php"><button type="button" value="HOME" class="display_inline" id="home">HOME</button></a>

			<a href="agenda.php"><button type="button" value="AGENDA" class="display_inline" id="agenda">AGENDA</button></a>

			<a href="reserva_servico.php"><button type="button" value="RESERVAR SERVIÇO" class="display_inline" id="reserva_servico">RESERVAR SERVIÇO</button></a>

			<a href="relacao_clientes.php"><button type="button" value="CLIENTES" class="display_inline" id="clientes">CLIENTES</button></a>

			<a href="registro_cliente.php"><button type="button" value="REGISTRAR CLIENTE" class="display_inline" id="registro_cliente">REGISTRAR CLIENTE</button></a>

			<a href="logout.html"><button type="button" value="LOGOUT" class="display_inline" id="logout">LOGOUT</button></a>

		</nav>
	

	<article>
		<?php

		$servicos = ServicoDAO::getInstance();
		$listaServicos = $servicos->listAll();

		

		print_r("<table style = 'width:100%'>");
		print_r("
			<thead style = 'width:100%'>
				<tr>
					<th>TIPO DO SERVIÇO</th>
					<th>CLIENTE</th>
					<th>DATA</th>
					<th>HORA</th>
					<th>LOCAL DO SERVIÇO</th>
				</tr>
			</thead>
			");
		print_r("<tbody style = 'width:100%'>");
		foreach ($listaServicos as $key => $value) {
			print_r("
				<tr>
					<td>".$value->getTipoServico()."</td>
					<td>".$value->getCliente()."</td>
					<td>".$value->getData()."</td>
					<td>".$value->getHora()."</td>
					<td>".$value->getLocalServico()."</td>
					<td><form method='POST' action='/lt_refrigeracaoDAO/controller/servicoDeleteController.php'>
					<input type='hidden' name='data' value=".$value->getData().">
					<input type='hidden' name='hora' value=".$value->getHora().">
					<button type='submit'>Deletar</button></form></td>
					<td><form method='POST' action='/lt_refrigeracaoDAO/view/php/alterar_servico.php'>
					<input type='hidden' name='data' value=".$value->getData().">
					<input type='hidden' name='hora' value=".$value->getHora().">
					<button type='submit'>Alterar</button></form></td>
				</tr>");
		}
		//solução: em cada botão colocar uma função de enviar dados/excluir esses dados
		print_r("</tbody>");
		print_r("</table>");

		?>

	</article>

		
	
	</body>

</html>
