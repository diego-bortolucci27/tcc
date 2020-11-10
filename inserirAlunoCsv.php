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
      document.location.href = 'cadastroAluno.php';
  
    </script>
  
  <?php
  
    }else{
        $objeto = fopen($arquivo, 'r');
  
        while(($dados = fgetcsv($objeto, 1000, ";")) !== FALSE){
          $rm = $dados[1];
          $digital = $dados[2];
          $nome = $dados[3];
          $serie = $dados[4];
          $curso = $dados[5];
          $telefone = $dados[6];
          $email = $dados[7];
          $nome_responsavel = $dados[8];
          $telefone_responsavel = $dados[9];
          $email_responsavel = $dados[10];
  
          $result = mysqli_query($conexao, "INSERT INTO alunos (rm, digital, nome, serie, curso, telefone, email, nome_responsavel, telefone_responsavel, email_Responsavel)VALUES ('$rm', '$digital', '$nome', '$serie', '$curso', '$telefone', '$email', '$nome_responsavel', '$telefone_responsavel', '$email_responsavel')");
  
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
            document.location.href = 'cadastroAluno.php';
    
        </script>
    
    <?php
      }
    }

    ?>