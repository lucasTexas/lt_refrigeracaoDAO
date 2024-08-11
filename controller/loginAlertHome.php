<?php

print_r("<script>
	function redirectToLogin(){
		alert('Acesso proibido. Faça login para continuar.');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/login.php';
	}
	window.onload = redirectToLogin;
	</script>");
