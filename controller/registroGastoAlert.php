<?php

print_r("<script>
	function redirectToRegistroGasto(){
		alert('Registro de Gasto realizado com sucesso.');
		window.location.href = '/lt_refrigeracaoDAO/view/php/registro_gasto.php';
	}
	window.onload = redirectToRegistroGasto;
	</script>");
?>
