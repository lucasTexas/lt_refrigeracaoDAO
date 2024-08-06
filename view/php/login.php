<!DOCTYPE html>

<?php 

require  $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/vo/Usuario.php'; 
require  $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/UsuarioDAO.php';

session_start();

//Esse bloco serve para verificar se o usuário está correto e redirecionar para a página de home
if(isset($_POST['email']) && isset($_POST['senha'])){
	if(UsuarioDAO::usuario_existe($_POST['email'], $_POST['senha'])){
		$_SESSION['user'];
		header("Location:". $_SERVER['DOCUMENT_ROOT'] . "/lt_refrigeracaoDAO"."/controller/loginController.php");
		exit();
	}else{
		print_r("<script>alert('Email e/ou senha incorretos')</script>");
	}
}

?>

<html>

	<head>

		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		

	</head>

	<body>

		<article id="form_login">
			<form name="login" method="POST" action="login.php">
				
				<label class="label">EMAIL: </label><br>
				<input type="text" name="email" class="input"><br><br>
				<label class="label">SENHA: </label><br>
				<input type="password" name="senha" class="input"><br><br><br>

				<button type="submit">
					Fazer Login
				</button>

			</form>
		</article>

	</body>

</html>
