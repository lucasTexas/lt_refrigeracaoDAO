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
    <title>Registro de Gasto</title>
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
        }
        @media (max-width: 768px) {
            #menu {
                position: relative;
                width: 100%;
                height: auto;
            }
            #main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <?php include 'menu.php'; ?>

    <article id="main-content">
        <div class="container">
            <h1 class="mb-4">Registro de Gasto</h1>
            <form name="registro_gasto" method="POST" action="/lt_refrigeracaoDAO/controller/registroGastoController.php">
                <div class="form-group">
                    <label for="valor">VALOR DO GASTO:</label>
                    <input type="text" name="valor" id="valor" class="form-control" required pattern="\d+(\.\d{1,2})?" title="Por favor, insira um valor válido.">
                </div>
                <div class="form-group">
                    <label for="descricao">DESCRIÇÃO DO GASTO:</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar Gasto</button>
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
