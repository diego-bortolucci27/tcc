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
          $senha = $dados[1];
          $funcao = $dados[2];
          $nome = $dados[3];
          $email = $dados[4];

          $senhaCrip = base64_encode($senha);
  
          $result = mysqli_query($conexao, "INSERT INTO funcionarios (id, senha, funcao, nome, email) VALUES ('$id', '$senhaCrip','$funcao','$nome','$email')");
  
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