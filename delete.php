<?php

    include_once('conexao.php');
    include_once('head.php');

    $rm = $_POST['rm'];
    //var_dump($rm);
    $sql = "DELETE FROM alunos WHERE rm = '$rm'";

    $query = mysqli_query($conexao, $sql);

    if($query){
        echo "Usuário excluido com sucesso!";
    }else{
        echo "Não foi possivel excluir o usuario";
    }
?>