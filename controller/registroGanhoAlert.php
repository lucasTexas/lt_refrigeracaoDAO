<?php

print_r("<script>
	function redirectToRegistroGanho(){
		alert('Registro de Ganho realizado com sucesso.');
		window.location.href = '/lt_refrigeracaoDAO/view/php/registro_ganho.php';
	}
	window.onload = redirectToRegistroGanho;
	</script>");
?>
