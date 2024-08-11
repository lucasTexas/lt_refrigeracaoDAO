<?php

print_r("<script>
	function redirectToLogin(){
		alert('Reserva de servico realizada com sucesso.');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/reserva_servico.php';
	}
	window.onload = redirectToLogin;
	</script>");
