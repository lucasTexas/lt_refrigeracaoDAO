<?php

print_r("<script>
	function redirectToUsuarios(){
		alert('Usuario excluido com sucesso');
		window.location.href = ' /lt_refrigeracaoDAO/view/php/relacao_usuarios.php';
	}
	window.onload = redirectToUsuarios;
	</script>");
