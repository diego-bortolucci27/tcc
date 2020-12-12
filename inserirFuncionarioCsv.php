<?php

  require_once 'conexao.php';
  require_once 'head.php';
  require_once 'navbar.php';

    $arquivo = $_FILES["file"]["tmp_name"];
    $nome = $_FILES["file"]["name"];
  
    $ext = explode(".", $nome);
  
    $extensao = end($ext);
  
    if($extensao != "csv"){
      
?>
    
    <script>
  
      window.alert('Extensão Inválida!');
      document.location.href = 'cadastroFuncionario.php';
  
    </script>
  
  <?php
  
    }else{
        $objeto = fopen($arquivo, 'r');
  
        while(($dados = fgetcsv($objeto, 1000, ";")) !== FALSE){
          $id = $dados[0];
          $usuario = $dados[1];
          $senha = $dados[2];
          $funcao = $dados[3];
          $nome = $dados[4];
          $email = $dados[5];

          $senhaCrip = base64_encode($senha);
  
          $result = mysqli_query($conexao, "INSERT INTO funcionarios (id, usuario, senha, funcao, nome, email) VALUES ('$id', '$usuario', '$senhaCrip','$funcao','$nome','$email')");
  
        }
  
      if ($result){
  
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
    }

    ?>