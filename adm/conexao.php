<?php

    $conexao = mysqli_connect('localhost', 'root', '', 'sistema');

    if (!$conexao)
        echo "<script> alert('Não foi possível conectar ao Banco de Dados!') </script>";
    else
        echo "";
?>