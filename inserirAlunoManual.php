<?php

  require_once 'conexao.php';
  require_once 'head.php';
  require_once 'navbar.php';

  $rm = $_GET['rm'];
  $digital = "456";
  $nome = $_GET['nome'];
  $serie = $_GET['serie'];
  $curso = $_GET['curso'];
  $telefone = $_GET['telefone'];
  $email = $_GET['email'];
  $nome_responsavel = $_GET['responsavel'];
  $telefone_responsavel = $_GET['telResponsavel'];
  $email_responsavel = $_GET['emailResponsavel'];

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

    if(empty($rm) OR empty($nome) OR empty($serie) OR empty($curso))
        echo "Não foi possível cadastrar";
    else
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
            document.location.href = 'cadastroAluno.php';
    
        </script>
    
    <?php
      }
    ?>