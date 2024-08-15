<?php

print_r("<script>
	function redirectToGastos(){
		alert('Gasto atualizado com sucesso');
		window.location.href = '/lt_refrigeracaoDAO/view/php/relacao_gastos.php';
	}
	window.onload = redirectToGastos;
	</script>");
