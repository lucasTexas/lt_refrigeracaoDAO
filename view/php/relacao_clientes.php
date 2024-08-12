<!DOCTYPE HTML>

<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ClienteDAO.php';

?>


<html>

	<head>

		<title>Relação de clientes</title>
		<meta name="author" content="Lucas Texas">
		<meta charset="utf-8">

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
		
		<!--
		<link rel="stylesheet" type="text/css" href="../css/relacao_clientes.css"> -->

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

		$clientes = ClienteDAO::getInstance();
		$listaClientes = $clientes->listAll();

		

		print_r("<table style = 'width:100%'>");
		print_r("
			<thead style = 'width:100%'>
				<tr>
					<th>NOME</th>
					<th>TELEFONE</th>
				</tr>
			</thead>
			");
		print_r("<tbody style = 'width:100%'>");
		foreach ($listaClientes as $key => $value) {
			print_r("
				<tr>
					<td>".$value->getNome()."</td>
					<td>".$value->getTelefone()."</td>
					<td><form method='POST' action='/lt_refrigeracaoDAO/controller/clienteDeleteController.php'>
					<input type='hidden' name='telefone' value=".htmlspecialchars($value->getTelefone(), ENT_QUOTES, 'UTF-8').">
					<button type='submit'>Deletar</button></form></td>
					<td><form method='POST' action='/lt_refrigeracaoDAO/view/php/alterar_cliente.php'>
					<input type='hidden' name='telefone' value=".htmlspecialchars($value->getTelefone(), ENT_QUOTES, 'UTF-8').">
					<button type='submit'>Alterar</button></form></td>
				</tr>");
		}
		
		print_r("</tbody>");
		print_r("</table>");
		// print_r($value->getTelefone());

		?>



	</body>


</html>
