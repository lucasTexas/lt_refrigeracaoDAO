<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #menu {
            background-color: #1e90ff;
            color: white;
            height: 100vh; /* Ocupa toda a altura da tela */
            width: 250px; /* Largura do menu */
            position: fixed; /* Fixa o menu na lateral */
            top: 0;
            left: 0;
            padding-top: 20px;
            overflow-y: auto; /* Adiciona rolagem vertical se necessário */
        }
        .nav-link {
            color: white;
            display: block;
            padding: 10px 15px;
            text-align: left;
            border-radius: 5px;
            margin: 5px 0;
        }
        .nav-link:hover {
            background-color: #0056b3;
        }
        #logoImage {
            height: 40px;
            width: auto;
            display: block;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body>
    <nav id="menu" class="navbar navbar-light">
        <article>
            <img src="pinguim_LT.png" alt="Logo" id="logoImage">
            <a href="home.php" class="nav-link">HOME</a>
            <a href="agenda.php" class="nav-link">AGENDA</a>
            <a href="reserva_servico.php" class="nav-link">RESERVAR SERVIÇO</a>
            <a href="relacao_clientes.php" class="nav-link">CLIENTES</a>
            <a href="registro_cliente.php" class="nav-link">REGISTRAR CLIENTE</a>
            <a href="relacao_usuarios.php" class="nav-link">USUÁRIOS</a>
            <a href="relacao_ganhos.php" class="nav-link">GANHOS</a>
            <a href="registro_ganho.php" class="nav-link">REGISTRAR GANHO</a>
            <a href="relacao_gastos.php" class="nav-link">GASTOS</a>
            <a href="registro_gasto.php" class="nav-link">REGISTRAR GASTO</a>
            <a href="login.php" class="nav-link">LOGOUT</a>
        </article>
    </nav>
</body>
</html>
