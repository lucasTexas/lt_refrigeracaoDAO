<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
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
        .separator {
            border-bottom: 1px solid white;
            margin: 5px 0;
        }
        #main-content {
            margin-left: 250px; /* Espaço para o menu lateral */
            padding: 20px;
        }
        #logoImage {
            height: 40px;
            width: auto;
            display: block;
            margin: 0 auto 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /lt_refrigeracaoDAO/controller/loginAlertHome.php');
        exit();
    }
    ?>
    
    <?php include 'menu.php'; ?>
    
    <article id="main-content">
        <div class="container">
            <h1 class="mb-4">Agenda</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>TIPO DO SERVIÇO</th>
                        <th>CLIENTE</th>
                        <th>DATA</th>
                        <th>HORA</th>
                        <th>LOCAL DO SERVIÇO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/ServicoDAO.php';
                    $servicos = ServicoDAO::getInstance();
                    $listaServicos = $servicos->listAll();

                    foreach ($listaServicos as $value) {
                        $data = htmlspecialchars($value->getData());
                        $hora = htmlspecialchars($value->getHora());
                        $tipoServico = htmlspecialchars($value->getTipoServico());
                        $cliente = htmlspecialchars($value->getCliente());
                        $localServico = htmlspecialchars($value->getLocalServico());

                        echo "<tr>
                            <td>{$tipoServico}</td>
                            <td>{$cliente}</td>
                            <td>{$data}</td>
                            <td>{$hora}</td>
                            <td>{$localServico}</td>
                            <td>
                                <form method='POST' action='/lt_refrigeracaoDAO/controller/servicoDeleteController.php' class='d-inline'>
                                    <input type='hidden' name='data' value='{$data}'>
                                    <input type='hidden' name='hora' value='{$hora}'>
                                    <button type='submit' class='btn btn-danger btn-sm'>Deletar</button>
                                </form>
                                <form method='POST' action='/lt_refrigeracaoDAO/view/php/alterar_servico.php' class='d-inline'>
                                    <input type='hidden' name='data' value='{$data}'>
                                    <input type='hidden' name='hora' value='{$hora}'>
                                    <button type='submit' class='btn btn-warning btn-sm'>Alterar</button>
                                </form>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
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
