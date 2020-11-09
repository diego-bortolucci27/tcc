<?php    
    
    require_once 'conexao.php';
    require_once 'head.php';
    require_once 'navbar.php';

    $id = $_GET['id'];
    //var_dump($rm);
    $sqlFuncionario = "DELETE FROM funcionarios WHERE id = '$id'";

    $queryFuncionario = mysqli_query($conexao, $sqlFuncionario);
        
    if($queryFuncionario){
?>
        
    <script>
        
        window.alert('Cadastro excluido com sucesso!');
        document.location.href = 'consultaFuncionarioAdmin.php';
        
    </script>
        
<?php
        
    }else{
        
?>

    <script>
        
        window.alert('O cadastro não pode ser excluido!');
        document.location.href = 'consultaFuncionarioAdmin.php';
        
    </script>
        
<?php
        
    }
        
?>