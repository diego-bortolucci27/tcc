<?php

    $conexao = mysqli_connect('127.0.0.1', 'root', '', 'sistema');

    if (!$conexao)
        echo "<script> alert('Não foi possível conectar ao Banco de Dados!') </script>";
    else
        echo "Conectado!";
?>