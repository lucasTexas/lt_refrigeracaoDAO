<!DOCTYPE html>

<?php 
// Código PHP adicional, se necessário
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        #form_cadastro {
            background-color: #1e90ff;
            padding: 30px;
            border-radius: 10px;
            color: #ffffff;
            max-width: 400px;
            width: 100%;
        }
        #form_cadastro label {
            color: #ffffff;
        }
        #form_cadastro .input {
            margin-bottom: 15px;
        }
        #form_cadastro button {
            background-color: #ffffff;
            color: #1e90ff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 100%;
        }
        #form_cadastro button:hover {
            background-color: #cccccc;
        }
        .login-link {
            color: #ffffff;
            text-align: center;
            display: block;
            margin-top: 20px;
        }
        .login-link:hover {
            color: #cccccc;
        }
    </style>
</head>

<body>

    <article id="form_cadastro" class="text-center">
        <form name="cadastro_usuario" method="POST" action="/lt_refrigeracaoDAO/controller/cadastroUsuarioController.php">
            <div class="form-group">
                <label for="nome" class="label">NOME: </label><br>
                <input type="text" id="nome" name="nome" class="form-control input" required><br>
            </div>
            <div class="form-group">
                <label for="email" class="label">EMAIL: </label><br>
                <input type="email" id="email" name="email" class="form-control input" required><br>
            </div>
            <div class="form-group">
                <label for="senha" class="label">SENHA: </label><br>
                <input type="password" id="senha" name="senha" class="form-control input" required><br>
            </div>
            <button type="submit" class="btn" aria-label="Cadastrar-se">Cadastrar-se</button>
        </form>
        <a href="login.php" class="login-link">Já tem uma conta? Faça login aqui</a>
    </article>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
