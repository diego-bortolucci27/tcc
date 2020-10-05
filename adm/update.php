<?php
    require_once '../head.php';
    require_once '../conexao.php';

    $rm = $_POST['rm'];
    var_dump($rm);
    $nome = $_POST['nome'];
    $serie = $_POST['serie'];
    $curso = $_POST['curso'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $nome_responsavel = $_POST['responsavel'];
    $telefone_responsavel = $_POST['telResponsavel'];
    $email_responsavel = $_POST['emailResponsavel'];

    $sql = "UPDATE alunos SET nome ='$nome',
    serie = '$serie',
    curso = '$curso',
    telefone = '$telefone',
    email = '$email',
    nome_responsavel = '$nome_responsavel',
    telefone_responsavel = '$telefone_responsavel',
    email_Responsavel = '$email_responsavel'
    WHERE rm = '$rm'";

    $query = mysqli_query($conexao, $sql);

    if($query){
        echo "Cadastro modificado com sucesso";
    }else{
        echo "Não foi possivel modificar o cadastro";
    }

?>