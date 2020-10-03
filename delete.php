<?php

    include_once('conexao.php');
    include_once('deletar.html');

    $rm=$_POST['rm'];
    $sql= "DELETE FROM alunos WHERE rm='$rm'";

    $query= mysqli_query($conexao, $sql);

    if ($query){
        echo "Cadastro excluido com sucesso!";
    }else{
        echo "Não foi possivel cadastrar o usuario";
    }

?>