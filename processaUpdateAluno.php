<?php
    require_once 'head.php';
    require_once 'conexao.php';
    require_once 'navbar.php';

    $rmm = $_POST['rmm'];
    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $serie = $_POST['serie'];
    $curso = $_POST['curso'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $nome_responsavel = $_POST['responsavel'];
    $telefone_responsavel = $_POST['telResponsavel'];
    $email_responsavel = $_POST['emailResponsavel'];

    $sql = "UPDATE alunos SET rm = '$rm',
    nome = '$nome',
    serie = '$serie',
    curso = '$curso',
    telefone = '$telefone',
    email = '$email',
    nome_responsavel = '$nome_responsavel',
    telefone_responsavel = '$telefone_responsavel',
    email_Responsavel = '$email_responsavel'
    WHERE rm = '$rmm'";

    if(empty($rm) OR empty($nome) OR empty($serie) OR empty($curso) OR empty($telefone) OR empty($email) OR empty($nome_responsavel) OR empty($telefone_responsavel) OR empty($email_responsavel))
        echo "Não foi possível alterar!";
    else
        $query = mysqli_query($conexao, $sql);
    if($query){
?>

    <script>

        window.alert('Cadastro alterado com sucesso!');
        document.location.href = 'consultaAlunoAdmin.php';

    </script>

<?php

    }else{

?>
  
    <script>

        window.alert('O cadastro não pode ser alterado. Verifique se todos os campos foram preenchidos!');
        document.location.href = 'consultaAlunoAdmin.php';

    </script>

<?php

    }

?>