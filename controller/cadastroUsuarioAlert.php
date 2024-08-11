<?php

print_r("<script>
	function redirectToLogin(){
		alert('Cadastro do Usuário realizado com sucesso.');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/login.php';
	}
	window.onload = redirectToLogin;
	</script>");
