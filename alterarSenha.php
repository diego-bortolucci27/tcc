<?php

    require_once 'conexao.php';
    require_once 'head.php';
    require_once 'navbar.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhaCrip = base64_encode($senha);

    $sql = "UPDATE funcionarios SET senha = '$senhaCrip' WHERE email = '$email'";

    $query = mysqli_query($conexao, $sql);

    if($query)
    {
?>
    <script>
        window.alert('Senha alterada com sucesso!');
        document.location.href = 'formLogin.php';
    </script>

<?php

    }else{

?>
    <script>

        window.alert('A senha não pode ser alterada!');
        document.location.href = 'esqueceuSenha.php';

    </script>

<?php

    }

?>