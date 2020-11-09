<?php

  require_once 'conexao.php';
  require_once 'head.php';
  require_once 'navbar.php';


  $nome = $_POST['nome'];
  $id = $_POST['id'];
  $funcao = $_POST['funcao'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "INSERT INTO funcionarios (id, senha, funcao, nome, email) VALUES ('$id', AES_ENCRYPT('$senha','decrypt'),'$funcao','$nome','$email')";

   $query = mysqli_query($conexao, $sql);

  if ($query){

?>

    <script>

        window.alert('Cadastro realizado com sucesso!');
  	    document.location.href = 'adm.php';

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