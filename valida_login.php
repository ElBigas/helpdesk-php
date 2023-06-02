<?php

//inicia a sessão
session_start();

$userEmail = $_POST['email'];
$userSenha = $_POST['senha'];
$usuarioAutenticado = false;

//usuários do sistema, por enquanto não vem do banco de dados
$usuarios_sup = array(
    array('email' => 'adm@helpdesk.com', 'senha' => '123456'),
    array('email' => 'user@helpdesk.com', 'senha' => '123456')
);

//cria um laço de repetição para verificar se o login e senha estão corretos
foreach ($usuarios_sup as $user) {
    if ($userEmail == $user['email'] && $userSenha == $user['senha']) {
        $usuarioAutenticado = true;
        $_SESSION['autenticado'] = 'YES';
    }
}

//caso esteja correto ($usuarioAutenticado = true), autentifica a sessão e encaminha para a home, caso contrário apresenta erro
if ($usuarioAutenticado) {
    $_SESSION['autenticado'] = 'YES';
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NO';
    header('Location: index.php?login=erro');
}
