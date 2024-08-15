<!DOCTYPE html>

<?php  
session_start();

if(!isset($_SESSION['user'])){
    header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
    exit();
}

// Sanitização do ID
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Gasto</title>
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
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <article id="main-content">
        <div class="container">
            <h1 class="mb-4">Alterar Gasto</h1>
            <form name="alterar_gasto" method="POST" action="/lt_refrigeracaoDAO/controller/gastosUpdateController.php">
                <div class="form-group">
                    <label for="valor">NOVO VALOR:</label>
                    <input type="text" name="valor" id="valor" class="form-control" required pattern="^\d+(\.\d{1,2})?$" title="Digite um valor monetário válido">
                </div>
                <div class="form-group">
                    <label for="descricao">NOVA DESCRIÇÃO:</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" required>
                </div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <button type="submit" class="btn btn-primary">Alterar Gasto</button>
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
