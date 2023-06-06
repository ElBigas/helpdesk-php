<html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>

                            <?php
                            if (isset($_GET['login']) && ($_GET['login']) == 'erro') {
                            ?>
                                <div style="text-align: center;" class="alert alert-danger mb-3">Usuário ou senhas inválidos</div>
                            <?php
                            }
                            ?>

                            <?php
                            if (isset($_GET['login']) && ($_GET['login']) == 'erro2') {
                            ?>
                                <div style="text-align: center;" class="alert alert-danger mb-3">Faça login para acessar</div>
                            <?php
                            }
                            ?>

                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>
                        <div>
                            <a href="novo-usuario.php" class="btn btn-secondary">Criar novo usuário</a>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_GET['login']) && ($_GET['login']) == 'success') {
                ?>
                    <div style="text-align: center;" class="alert alert-success mt-4">Cadastro realizado com sucesso!</div>
                <?php
                }
                ?>
            </div>
        </div>
</body>

</html>