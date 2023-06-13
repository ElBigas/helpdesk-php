<?php

include("config.php");

switch ($_REQUEST['acao']) {

        //lógica que irá adicionar um novo chamado no banco de dados
    case 'registrar':

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
        break;

    case 'editar':

        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];

        //query SQL
        $sql = "UPDATE chamados SET
        titulo = '{$titulo}', 
        categoria = '{$categoria}', 
        descricao = '{$descricao}'
        
        WHERE 
            id=" . $_REQUEST["id"];

        //executa a query
        $resultado = $conexao->query($sql);

        if ($resultado) {
            print "<script>
                location.href='home.php?page=editado'; 
            </script>";
        } else {
            print "<script>
                alert('Houve um erro')
            </script>";
        }
        break;

}
