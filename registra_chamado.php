<?php
    include('config.php');

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    //query SQL
    $sql = "INSERT INTO chamados
                        (titulo, categoria, descricao)
                        VALUES
                        ('{$titulo}', '{$categoria}', '{$descricao}')";

    //executa a query
    $resultado = $conexao->query($sql);

    if ($resultado) {
        print "<script>
                location.href='home.php?page=success'; 
            </script>";
    } else {
        print "<script>
                alert('Houve um erro')
            </script>";
    }
