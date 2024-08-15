<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
    exit();
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/DAO/UsuarioDAO.php';
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
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
            transform: translateX(-250px);
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
        #main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }
        #menu.collapsed + #main-content {
            margin-left: 0;
        }
        .btn-action {
            margin-right: 5px; /* Espaçamento entre os botões */
        }
        /* Estilos para telas menores */
        @media (max-width: 768px) {
            #menu {
                transform: translateX(-250px);
            }
            #menu.collapsed {
                transform: translateX(0);
            }
            #main-content {
                margin-left: 0;
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
            <h1 class="mb-4">Usuários</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $usuarios = UsuarioDAO::getInstance();
                        $listaUsuarios = $usuarios->listAll();

                        foreach ($listaUsuarios as $usuario) {
                            echo "<tr>
                                <td>" . $usuario->getNome() . "</td>
                                <td>" . $usuario->getEmail() . "</td>
                                <td>
                                    <form method='POST' action='/lt_refrigeracaoDAO/controller/usuarioDeleteController.php' class='d-inline'>
                                        <input type='hidden' name='id' value='" . $usuario->getIdUsuario() . "'>
                                        <button type='submit' class='btn btn-danger btn-sm btn-action'>Deletar</button>
                                    </form>
                                    <form method='POST' action='/lt_refrigeracaoDAO/view/php/alterar_usuario.php' class='d-inline'>
                                        <input type='hidden' name='id' value='" . $usuario->getIdUsuario() . "'>
                                        <button type='submit' class='btn btn-warning btn-sm btn-action'>Alterar</button>
                                    </form>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
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
