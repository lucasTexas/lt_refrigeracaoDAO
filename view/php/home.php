<!DOCTYPE HTML>

<?php 

require_once $_SERVER['DOCUMENT_ROOT'] .'/lt_refrigeracaoDAO/model/DAO/UsuarioDAO.php';

session_start();

if(!isset($_SESSION['user'])){
    header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
    exit();
}

?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 20px;
            background-color: #f8f9fa;
        }
        #welcome-section {
            text-align: center;
            margin-bottom: 30px;
        }
        #buttons-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .btn-custom {
            width: 250px;
            height: 150px;
            font-size: 18px;
            margin: 10px;
            text-align: center;
            line-height: 150px; /* Centraliza verticalmente o texto */
            background-color: #1e90ff; /* Cor principal */
            color: white;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3; /* Cor ao passar o mouse */
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="welcome-section">
            <?php 
                $nome = strtoupper(UsuarioDAO::getUsuarioNome($_SESSION['user'])); //session['user'] está setado como o email do usuario.
                echo "<h1>BEM VINDO(A), ". $nome. "!</h1>";
                echo "<p>O QUE DESEJA FAZER HOJE?</p>";
            ?>
        </div>

        <div id="buttons-container">
            <a href="agenda.php" class="btn btn-custom">Ver Agenda</a>
            <a href="reserva_servico.php" class="btn btn-custom">Reservar Serviço</a>
            <a href="relacao_clientes.php" class="btn btn-custom">Ver Relação de Clientes</a>
            <a href="registro_cliente.php" class="btn btn-custom">Registrar Cliente</a>
            <a href="relacao_usuarios.php" class="btn btn-custom">Ver Relação de Usuários</a>
            <a href="relacao_ganhos.php" class="btn btn-custom">Ver Relação de Ganhos</a>
            <a href="registro_ganho.php" class="btn btn-custom">Registrar Ganho</a>
            <a href="relacao_gastos.php" class="btn btn-custom">Ver Relação de Gastos</a>
            <a href="registro_gasto.php" class="btn btn-custom">Registrar Gasto</a>
            <a href="login.php" class="btn btn-custom">Logout</a>
        </div>
    </div>

    <!-- jQuery via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS via CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
