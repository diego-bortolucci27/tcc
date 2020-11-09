<?php

  require_once 'conexao.php';
  require_once 'head.php';
  require_once 'navbar.php';

  $rm = $_POST['rm'];
  $digital = "456";
  $nome = $_POST['nome'];
  $serie = $_POST['serie'];
  $curso = $_POST['curso'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $nome_responsavel = $_POST['responsavel'];
  $telefone_responsavel = $_POST['telResponsavel'];
  $email_responsavel = $_POST['emailResponsavel'];

  $sql = "INSERT INTO alunos (rm, digital, nome, serie, curso, telefone, email, nome_responsavel, telefone_responsavel, email_Responsavel)VALUES (
  '$rm',
  '$digital',
  '$nome',
  '$serie',
  '$curso',
  '$telefone',
  '$email',
  '$nome_responsavel',
  '$telefone_responsavel',
  '$email_responsavel
  ')";

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