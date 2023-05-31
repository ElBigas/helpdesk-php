<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        ;
    </style>
</head>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
</svg>

<?php

$userEmail = $_POST['email'];
$userSenha = $_POST['senha'];
$usuarioAutenticado = false;

//usuários do sistema
$usuarios_sup = array(
    array('email' => 'adm@helpdesk.com', 'senha' => '123456'),
    array('email' => 'user@helpdesk.com', 'senha' => '123456')
);

foreach ($usuarios_sup as $user) {
    if ($userEmail == $user['email'] && $userSenha == $user['senha']) {
        $usuarioAutenticado = true;
    }
}

if ($usuarioAutenticado) {
    echo '<div class="alert alert-success d-flex align-items-center mt-3" role="alert">
     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
     <div class="m-2">
        Sucesso!
     </div>
   </div>';
} else {
    header('Location: index.php?login=erro');
}
