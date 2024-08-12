<?php

print_r("<script>
	function redirectToClientes(){
		alert('Cliente excluido com sucesso');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/relacao_clientes.php';
	}
	window.onload = redirectToClientes;
	</script>");
