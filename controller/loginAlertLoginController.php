<?php

print_r("<script>
	function redirectToLogin(){
		alert('Email e/ou senha incorretos');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/login.php';
	}
	window.onload = redirectToLogin;
	</script>");
