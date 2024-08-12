<?php

print_r("<script>
	function redirectToRegistroCliente(){
		alert('Registro de Cliente realizado com sucesso.');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/registro_cliente.php';
	}
	window.onload = redirectToRegistroCliente;
	</script>");
