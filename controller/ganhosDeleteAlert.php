<?php

print_r("<script>
	function redirectToGanhos(){
		alert('Ganho excluido com sucesso');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/relacao_ganhos.php';
	}
	window.onload = redirectToGanhos;
	</script>");
