<?php 

    //inicia a sessão e verifica se a autentificação é valida
    session_start();

    if(!isset($_SESSION['autenticado']) || 
        $_SESSION['autenticado'] == 'NO') {

    header('Location: index.php?login=erro2');

    };

?>