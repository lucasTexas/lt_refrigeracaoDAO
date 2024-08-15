<!DOCTYPE html>

<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
        exit();
    }
    ?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Serviço</title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #menu {
            background-color: #1e90ff;
            color: white;
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            overflow-y: auto;
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
        .separator {
            border-bottom: 1px solid white;
            margin: 5px 0;
        }
        #main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }
        #menu.collapsed + #main-content {
            margin-left: 0;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-primary {
            margin-top: 15px;
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
            <h1 class="mb-4">Reservar Serviço</h1>
            <form name="reserva_servico" method="POST" action="/lt_refrigeracaoDAO/controller/reservaServicoController.php" class="form">
                <div class="form-group">
                    <label for="tipo_servico">Tipo de Serviço:</label>
                    <input type="text" id="tipo_servico" name="tipo_servico" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cliente">Cliente Contratante:</label>
                    <input type="text" id="cliente" name="cliente" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="data">Data do Serviço:</label>
                    <input type="date" id="data" name="data" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="hora">Horário do Serviço:</label>
                    <input type="time" id="hora" name="hora" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="local_servico">Local do Serviço:</label>
                    <input type="text" id="local_servico" name="local_servico" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Reservar Serviço</button>
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
