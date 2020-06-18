<?php

    include_once("conexao.php");

    //$id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $dataNascimento = $_POST['dataNascimento'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $rm = $_POST['rm'];
    $setor = $_POST['setor'];
    $senha = $_POST['senha'];
    
    /*
    $sql = "INSERT INTO * table VALUES (
    '$nome',
    '$email',
    '$sexo',
    '$dataNascimento',
    '$telefone',
    '$celular',
    '$cep',
    '$estado',
    '$cidade',
    '$endereco',
    '$numero',
    '$rm',
    '$setor',
    '$senha')";
    */

    $query = mysqli_query($conexao, $sql);

    if ($query)
        echo "Cadastro realizado com Sucesso!";
    else
        echo "Não foi possível concluir o cadastro!";
?>