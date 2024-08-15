<!DOCTYPE html>

<?php 
session_start();
session_destroy();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #form_login {
            background-color: #1e90ff;
            padding: 30px;
            border-radius: 10px;
            color: #ffffff;
            max-width: 400px;
            width: 100%;
        }
        #form_login label {
            color: #ffffff;
        }
        #form_login .input {
            margin-bottom: 15px;
        }
        #form_login button {
            background-color: #ffffff;
            color: #1e90ff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 100%;
        }
        #form_login button:hover {
            background-color: #cccccc;
        }
        .register-link {
            color: #ffffff;
            text-align: center;
            display: block;
            margin-top: 20px;
        }
        .register-link:hover {
            color: #cccccc;
        }
    </style>
</head>

<body>

    <article id="form_login" class="text-center">
        <form name="login" method="POST" action="/lt_refrigeracaoDAO/controller/loginController.php">
            <div class="form-group">
                <label for="email" class="label">EMAIL: </label><br>
                <input type="text" id="email" name="email" class="form-control input" required><br>
            </div>
            <div class="form-group">
                <label for="senha" class="label">SENHA: </label><br>
                <input type="password" id="senha" name="senha" class="form-control input" required><br><br>
            </div>
            <button type="submit" class="btn">Fazer Login</button>
        </form>
        <a href="cadastro_usuario.php" class="register-link">Não é cadastrado ainda? Cadastre-se aqui</a>
    </article>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
