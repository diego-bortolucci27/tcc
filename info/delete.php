<?php

    require_once '../conexao.php';
    require_once '../head.php';

    $rm = $_GET['rm'];
    //var_dump($rm);
    $sql = "DELETE FROM alunos WHERE rm = '$rm'";

    $query = mysqli_query($conexao, $sql);

    if($query){
        echo "Usuário excluido com sucesso!";
    }else{
        echo "Não foi possivel excluir o usuario";
    }
?>