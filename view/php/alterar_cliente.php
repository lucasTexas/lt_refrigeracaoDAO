<!DOCTYPE html>

<html>
<head>
	<title>Alterar Cliente</title>
</head>
<body>


		<form name="alterar_cliente" method="POST" action="/lt_refrigeracaoDAO/controller/clienteUpdateController.php">

			<label class="label">NOVO NOME: </label><br>
			<input type="text" name="nome" class="input"><br><br>
			<label class="label">NOVO TELEFONE: </label><br>
			<input type="text" name="telefone" class="input"><br><br>
			<?php
				print_r("
					<input type='hidden' name='telefoneAntigo' value=".$_POST['telefone'].">
					");
				// print_r($_POST['telefone']);
			?>
			<button type="submit">
				Alterar Cliente
			</button><br><br><br><br><br><br><br><br>
		</form>
	

</body>
</html>