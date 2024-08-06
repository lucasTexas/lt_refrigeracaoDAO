<!DOCTYPE HTML>

<?php require_once 'arquivos_php/funcoes.php'?>

<?php

if(isset($_POST['tipo_servico']) && isset($_POST['cliente']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['local_servico'])){
	if($_POST['tipo_servico'] === '' || $_POST['cliente'] === '' || $_POST['data'] === '' || $_POST['hora'] === '' || $_POST['local_servico'] === ''){
		print_r("<script>alert('Informações incompletas')</script>");
	}else{
		insert_servico($_POST['tipo_servico'], $_POST['data'], $_POST['hora'], $_POST['local_servico'], $_POST['cliente']);
		header("Location: reserva_servico.php");
	}
}

?>

<html>

	<head>

		<title>Reserva de serviço</title>
		<meta name="author" content="Lucas Texas">
		<meta charset="utf-8">
		
		<link rel="stylesheet" type="text/css" href="../css/reserva_servico.css">

	</head>

	<body>

		<nav id="menu">
			<object data="pinguim_LT.png" id="logoImage"></object>
			
			<a href="home.html"><button type="button" value="HOME" class="display_inline" id="home">HOME</button></a>

			<a href="agenda.html"><button type="button" value="AGENDA" class="display_inline" id="agenda">AGENDA</button></a>

			<a href="reserva_servico.html"><button type="button" value="RESERVAR SERVIÇO" class="display_inline" id="reserva_servico">RESERVAR SERVIÇO</button></a>

			<a href="relacao_clientes.html"><button type="button" value="CLIENTES" class="display_inline" id="clientes">CLIENTES</button></a>

			<a href="registro_cliente.html"><button type="button" value="REGISTRAR CLIENTE" class="display_inline" id="registro_cliente">REGISTRAR CLIENTE</button></a>

			<a href="logout.html"><button type="button" value="LOGOUT" class="display_inline" id="logout">LOGOUT</button></a>

		</nav>

		<form name="reserva_servico" method="POST" action="reserva_servico.php" class="form_reserva_servico">

			<label class="label">TIPO DE SERVIÇO: </label><br>
			<input type="text" name="tipo_servico" class="input"><br><br>
			<label class="label">CLIENTE CONTRATANTE: </label><br>
			<input type="text" name="cliente" class="input"><br><br>
			<label class="label">DATA DO SERVIÇO: </label><br>
			<input type="date" name="data" class="input"><br><br><br>
			<label class="label">HORÁRIO DO SERVIÇO: </label><br>
			<input type="time" name="hora" class="input"><br><br><br>
			<label class="label">LOCAL DO SERVIÇO: </label><br>
			<input type="text" name="local_servico" class="input"><br><br><br>

			<button type="submit">
				Reservar Serviço
			</button><br><br><br><br><br><br><br><br>
		</form>
	
	</body>

</html>
