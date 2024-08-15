<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
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
        #main-content {
            margin-left: 250px; /* Espaço para o menu lateral */
            padding: 20px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <?php  
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
        exit();
    }

    // Certifique-se de sanitizar o id antes de usá-lo
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    ?>

    <?php include 'menu.php'; ?>

    <article id="main-content">
        <div class="container">
            <h1 class="mb-4">Alterar Usuário</h1>
            <form name="alterar_usuario" method="POST" action="/lt_refrigeracaoDAO/controller/usuarioUpdateController.php">
                <div class="form-group">
                    <label for="nome">NOVO NOME:</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">NOVO EMAIL:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="senha">NOVA SENHA:</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <button type="submit" class="btn btn-primary" aria-label="Alterar Usuário">Alterar Usuário</button>
            </form>
        </div>
    </article>

    <!-- jQuery via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS via CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
