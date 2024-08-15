<?php

print_r("<script>
	function redirectToGastos(){
		alert('Gasto excluído com sucesso');
		window.location.href = '/lt_refrigeracaoDAO/view/php/relacao_gastos.php';
	}
	window.onload = redirectToGastos;
	</script>");
