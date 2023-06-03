<?php

// Inicia a sessão
session_start();

// Conexão com o banco de dados
include('config.php');

$email = $_POST["email"];
$senha = $_POST["senha"];

// Consulta SQL para buscar o usuário no banco de dados
$sql = "SELECT * FROM usuarios
WHERE email = '{$email}'
AND senha = '{$senha}' ";

// Executa a consulta SQL
$res = $conn->query($sql) or die($conn->error);

// Verifica se o usuário foi encontrado
$row = $res->fetch_object();

$qtd = $res->num_rows;

if ($qtd > 0) {
    // Inicia a sessão e guarda os dados do usuário
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $row->nome;
    $_SESSION['autenticado'] = 'YES';
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NO';
    header('Location: index.php?login=erro');
}

