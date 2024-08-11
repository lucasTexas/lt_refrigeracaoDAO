<!DOCTYPE HTML>

<?php 

require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/UsuarioDAO.php';

session_start();

if(!isset($_SESSION['user'])){
	
	header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
	exit();
}


?>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="../css/home.css">
	</head>

	<body>
		
		<?php 
			$nome = strtoupper(UsuarioDAO::getUsuarioNome($_SESSION['user'])); //session['user'] está setado como o email do usuario.
			print_r("
				<p id='bem_vindo'>BEM VINDO (A), ". $nome. "!</p>
				<p id='pergunta'>O QUE DESEJA FAZER HOJE?</p>");


		?>

		

		<article id="caixas">
			
			<a href="agenda.php"><button type="button" value="VER AGENDA" id="agenda">VER AGENDA</button></a>
			
			<a href="reserva_servico.php"><button type="button" value="RESERVAR SERVIÇO NA AGENDA" id="reserva_servico">RESERVAR SERVIÇO NA AGENDA</button></a>
			
			<a href="relacao_clientes.php"><button type="button" value="VER RELAÇÃO DE CLIENTES" id="relacao_clientes">VER RELAÇÃO DE CLIENTES</button></a>
			
			<a href="registro_cliente.php"><button type="button" value="REGISTRAR CLIENTE" id="registro_cliente">REGISTRAR CLIENTE</button></a>
			
		</article>


	</body>

</html>

