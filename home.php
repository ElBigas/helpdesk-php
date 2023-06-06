<?php
include_once 'validador.php'
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-home,
        .card-abrir-chamado,
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="btn btn-danger">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">

            <?php
            //arquivo de configuração
            include("config.php");

            //será verificado na URL o 'page' e será incluido a página correspondente
            switch (@$_REQUEST['page']) {

                case 'abrir-chamado':
                    include('abrir_chamado.php');
                    break;

                case 'consultar-chamado':
                    include('consultar_chamado.php');
                    break;

                default: ?>
                    <div class="card-home">
                        <div class="mb-4">
                            <h1>Bem vindo, <?php print $_SESSION["nome"]; ?></h1>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                Menu
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center">
                                        <a href="?page=abrir-chamado">
                                            <img src="formulario_abrir_chamado.png" width="70" height="70">
                                        </a>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <a href="?page=consultar-chamado">
                                            <img src="formulario_consultar_chamado.png" width="70" height="70">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            };
            ?>
        </div>
        <?php
        if (isset($_GET['page']) && ($_GET['page']) == 'success') {
        ?>
            <div class="row justify-content-center">
                <div class="alert alert-success mt-4" role="alert">
                    Chamado criado com sucesso!
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>