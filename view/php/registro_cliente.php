<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
        exit();
    }
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Lucas Texas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
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
            transition: transform 0.3s ease-in-out;
        }
        #menu.collapsed {
            transform: translateX(-250px); /* Esconde o menu fora da tela */
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
        #main-content {
            margin-left: 250px; /* Espaço para o menu lateral */
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }
        #menu.collapsed + #main-content {
            margin-left: 0; /* Remove o espaço lateral quando o menu está escondido */
        }
        .form-group {
            margin-bottom: 1rem;
        }
        /* Estilos para telas menores */
        @media (max-width: 768px) {
            #menu {
                transform: translateX(-250px); /* Esconde o menu inicialmente em telas menores */
            }
            #menu.collapsed {
                transform: translateX(0); /* Mostra o menu quando alternado */
            }
            #main-content {
                margin-left: 0; /* Remove o espaço lateral em telas menores */
            }
            #menu-toggle {
                display: block;
                position: fixed;
                top: 10px;
                left: 10px;
                background-color: #1e90ff;
                color: white;
                border: none;
                padding: 10px;
                border-radius: 5px;
                z-index: 1000;
            }
        }
    </style>
</head>
<body>
    
    <!-- Botão de toggle para o menu (visível em telas menores) -->
    <button id="menu-toggle" class="d-lg-none">Menu</button>

    <?php include 'menu.php'; ?>

    <article id="main-content">
        <div class="container">
            <h1 class="mb-4">Registro de Cliente</h1>
            <form name="registro_cliente" method="POST" action="/lt_refrigeracaoDAO/controller/registroClienteController.php">
                <div class="form-group">
                    <label for="nome">NOME DO CLIENTE:</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefone">TELEFONE DO CLIENTE:</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar Cliente</button>
            </form>
        </div>
    </article>

    <!-- jQuery via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS via CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Alterna a visibilidade do menu lateral em telas menores
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('collapsed');
        });
    </script>
</body>
</html>
