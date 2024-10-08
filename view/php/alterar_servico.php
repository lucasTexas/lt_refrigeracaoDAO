<!DOCTYPE html>

<?php  
session_start();

if(!isset($_SESSION['user'])){
    header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
    exit();
}

// Sanitização dos dados antigos (data e hora)
$dataAntiga = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$horaAntiga = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Serviço</title>
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
            <h1 class="mb-4">Alterar Serviço</h1>
            <form name="alterar_servico" method="POST" action="/lt_refrigeracaoDAO/controller/servicoUpdateController.php">
                <div class="form-group">
                    <label for="tipo_servico">NOVO TIPO DE SERVIÇO:</label>
                    <input type="text" name="tipo_servico" id="tipo_servico" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cliente">NOVO CLIENTE CONTRATANTE:</label>
                    <input type="text" name="cliente" id="cliente" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="data">NOVO DATA DO SERVIÇO:</label>
                    <input type="date" name="data" id="data" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="hora">NOVO HORÁRIO DO SERVIÇO:</label>
                    <input type="time" name="hora" id="hora" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="local_servico">NOVO LOCAL DO SERVIÇO:</label>
                    <input type="text" name="local_servico" id="local_servico" class="form-control" required>
                </div>
                <input type="hidden" name="dataAntiga" value="<?php echo htmlspecialchars($dataAntiga); ?>">
                <input type="hidden" name="horaAntiga" value="<?php echo htmlspecialchars($horaAntiga); ?>">
                <button type="submit" class="btn btn-primary" aria-label="Alterar Serviço">Alterar Serviço</button>
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
