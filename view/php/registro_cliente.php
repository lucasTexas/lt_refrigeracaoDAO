<!DOCTYPE HTML>

<html>

	<head>

		<title>Registro de cliente</title>
		<meta name="author" content="Lucas Texas">
		<meta charset="utf-8">
		
		<!--
		<link rel="stylesheet" type="text/css" href="../css/registro_cliente.css">-->

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
	

	<form name="registro_cliente" method="POST" action="/lt_refrigeracaoDAO/controller/registroClienteController.php" class="form_registro_cliente">

			<label class="label">NOME DO CLIENTE: </label><br>
			<input type="text" name="nome" class="input"><br><br>
			<label class="label">TELEFONE DO CLIENTE: </label><br>
			<input type="text" name="telefone" class="input"><br><br>

			<button type="submit">
				Registrar Cliente
			</button><br><br><br><br><br><br><br><br>
		</form>
	
	
	</body>

</html>
