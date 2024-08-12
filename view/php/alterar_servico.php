<!DOCTYPE html>

<html>
<head>
	<title>Alterar Serviço</title>
</head>
<body>

		<form name="alterar_servico" method="POST" action="/lt_refrigeracaoDAO/controller/servicoUpdateController.php">

			<label class="label">NOVO TIPO DE SERVIÇO: </label><br>
			<input type="text" name="tipo_servico" class="input"><br><br>
			<label class="label">NOVO CLIENTE CONTRATANTE: </label><br>
			<input type="text" name="cliente" class="input"><br><br>
			<label class="label">NOVO DATA DO SERVIÇO: </label><br>
			<input type="date" name="data" class="input"><br><br><br>
			<label class="label">NOVO HORÁRIO DO SERVIÇO: </label><br>
			<input type="time" name="hora" class="input"><br><br><br>
			<label class="label">NOVO LOCAL DO SERVIÇO: </label><br>
			<input type="text" name="local_servico" class="input"><br><br><br>

			<?php
			print_r("
			<input type='hidden' name='dataAntiga' value=".$_POST['data'].">
			<input type='hidden' name='horaAntiga' value=".$_POST['hora'].">
			");
			?>
			<button type="submit">
				Alterar Serviço
			</button><br><br><br><br><br><br><br><br>
		</form>
	

</body>
</html>