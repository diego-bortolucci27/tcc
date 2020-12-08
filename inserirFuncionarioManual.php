<?php

  require_once 'conexao.php';
  require_once 'head.php';
  require_once 'navbar.php';

  $id = $_GET['id'];
  $nome = $_GET['nome'];
  $usuario = $_GET['usuario'];
  $funcao = $_GET['funcao'];
  $email = $_GET['email'];
  $senha = $_GET['senha'];

  $senhaCrip = base64_encode($senha);

  $sql = "INSERT INTO funcionarios (id, usuario, senha, funcao, nome, email) VALUES ('$id', '$usuario', '$senhaCrip','$funcao','$nome','$email')";

    if(empty($nome) OR empty($usuario) OR empty($senhaCrip) OR empty($funcao) OR empty($email))
        echo "não foi possível cadastrar!";
    else
        $query = mysqli_query($conexao, $sql);
    if ($query){

?>
    <script>

        window.alert('Cadastro realizado com sucesso!');
  	    document.location.href = 'consultaFuncionarioAdmin.php';

    </script>

<?php

  }
  else{

?>

    <script>

        window.alert('O cadastro não pode ser realizado!');
  	    document.location.href = 'cadastroFuncionario.php';

    </script>

<?php
  }
?>