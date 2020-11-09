<?php

    require_once 'conexao.php';
    require_once 'head.php';
    require_once 'navbar.php';

    $rm = $_GET['rm'];
    //var_dump($rm);
    $sqlAluno = "DELETE FROM alunos WHERE rm = '$rm'";

    $queryAluno = mysqli_query($conexao, $sqlAluno);

    if($queryAluno){
?>
        
    <script>
        
        window.alert('Cadastro excluido com sucesso!');
        document.location.href = 'consultaAlunoAdmin.php';
        
    </script>
        
<?php
        
    }else{
        
?>

    <script>
        
        window.alert('O cadastro não pode ser excluido!');
        document.location.href = 'consultaAlunoAdmin.php';
        
    </script>
        
<?php
        
    }
        
?>