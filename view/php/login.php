<!DOCTYPE html>

<?php 
session_start();
session_destroy();
?>

<html>

	<head>

		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		

	</head>

	<body>

		<article id="form_login">
			<form name="login" method="POST" action="/lt_refrigeracaoDAO/controller/loginController.php">
				
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
