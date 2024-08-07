<!DOCTYPE html>

<?php 

	
	

?>

<html>

	<head>

		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		

	</head>

	<body>

		<article id="form_login">
			<form name="cadastro_usuario" method="POST" action="/lt_refrigeracaoDAO/controller/cadastroUsuarioController.php">
				<label class="label">NOME: </label><br>
				<input type="text" name="nome" class="input"><br><br>
				<label class="label">EMAIL: </label><br>
				<input type="text" name="email" class="input"><br><br>
				<label class="label">SENHA: </label><br>
				<input type="password" name="senha" class="input"><br><br><br>

				<button type="submit">
					Cadastrar-se
				</button>

			</form>
		</article>

	</body>

</html>
