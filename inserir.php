<?php

    include_once("conexao.php");

    $rm = $_POST['rm'];
    $digital = "456";
    $nome = $_POST['nome'];
    $serie = $_POST['serie'];
    $curso = $_POST['curso'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $nome_responsavel = $_POST['responsavel'];
    $telefone_responsavel = $_POST['telResponsavel'];
    $email_responsavel = $_POST['emailResponsavel'];

    $sql = "INSERT INTO alunos (rm, digital, nome, serie, curso, telefone, email, nome_responsavel, telefone_responsavel, email_Responsavel)VALUES (
    '$rm',
    '$digital',
    '$nome',
    '$serie',
    '$curso',
    '$telefone',
    '$email',
    '$nome_responsavel',
    '$telefone_responsavel',
    '$email_responsavel
    ')";

    $query = mysqli_query($conexao, $sql);

    if ($query)
        echo "Cadastro realizado com Sucesso!";
    else
        echo "Não foi possível concluir o cadastro!";
?>