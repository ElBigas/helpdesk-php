<?php 
    //destroi a sessão e volta para 'index.php'

    session_start();

    session_destroy();

    header('Location: index.php')

?>