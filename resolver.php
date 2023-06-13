<?php 

include("config.php");

$sql = "DELETE FROM chamados
                WHERE 
                id=" . $_REQUEST["id"];

        $resultado = $conexao->query($sql);

        if ($resultado) {
            print "<script>
                location.href='home.php?page=resolvido'; 
            </script>";
        } else {
            print "<script>
                alert('Houve um erro')
            </script>";
        }
