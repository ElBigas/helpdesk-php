<?php

include('config.php');

//variaveis para inserir no banco de dados 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

//variavel onde guarda a query de SQL, aqui será para inserir, um INSERT
$sql = "INSERT INTO usuarios
        (nome, email, senha)
        VALUES
        ('{$nome}', '{$email}', '{$senha}')";

//varialvel que executa a query
$resultado = $conexao->query($sql);

//caso o resultado for positivo, irá apresentar uma mensagem de sucesso, caso contrário uma informando erro
if ($resultado) {
    print "<script>
            location.href='index.php?login=success'; 
            </script>";
} else {
    print "<script>
            alert('Houve um erro')
            </script>";
}
