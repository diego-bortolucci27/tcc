<?php

  require_once 'conexao.php';
  require_once 'head.php';
  require_once 'navbar.php';


  $nome = $_GET['nome'];
  $id = $_GET['id'];
  $funcao = $_GET['funcao'];
  $email = $_GET['email'];
  $senha = $_GET['senha'];

  $senhaCrip = base64_encode($senha);

  $sql = "INSERT INTO funcionarios (id, senha, funcao, nome, email) VALUES ('$id', '$senhaCrip','$funcao','$nome','$email')";

    if(empty($id) OR empty($nome) OR empty($senhaCrip) OR empty($funcao) OR empty($email))
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
  	    document.location.href = 'consultaFuncionarioAdmin.php';

    </script>

<?php
  }
?>