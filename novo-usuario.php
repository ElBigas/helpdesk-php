<html>

<head>
    <meta charset="utf-8" />
    <title>Criar novo usuário</title>

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
        <a class="navbar-brand" href="index.php">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
    </nav>

    <div class="container mt-5">
        <div class="card-home">
            <div class="mb-5">
                <h1>Criar novo usuário</h1>
            </div>

            <form action="salvar-usuario.php" method="POST">

                <input type="hidden" name="acao" value="cadastrar">

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                </div>
                <div class="mb-3 mt-5 d-flex justify-content-between">
                    <a class="btn btn-warning btn-lg" href="index.php">Voltar</a>
                    <button id="submitCad" type="submit" class="btn btn-info btn-lg">Criar</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>