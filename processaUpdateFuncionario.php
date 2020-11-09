<?php
    require_once 'head.php';
    require_once 'conexao.php';
    require_once 'navbar.php';

    $id = $_POST['id'];
    //var_dump($id);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $funcao = $_POST['funcao'];
    $senha = $_POST['senha'];

    $senhaCrip = base64_encode($senha);

    $sql = "UPDATE funcionarios SET senha = '$senhaCrip', funcao = '$funcao', nome = '$nome', email = '$email' WHERE id = '$id'";

    $query = mysqli_query($conexao, $sql);

    if($query){
?>

    <script>

        window.alert('Cadastro alterado com sucesso!');
        document.location.href = 'consultaFuncionarioAdmin.php';

    </script>

<?php

    }else{

?>
    <script>

        window.alert('O cadastro não pode ser alterado!');
        document.location.href = 'dadosUpdateFuncionario.php';

    </script>

<?php

    }

?>