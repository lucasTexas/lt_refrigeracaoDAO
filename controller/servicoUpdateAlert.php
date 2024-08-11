<?php

print_r("<script>
	function redirectToAgenda(){
		alert('Serviço atualizado com sucesso');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/agenda.php';
	}
	window.onload = redirectToAgenda;
	</script>");
