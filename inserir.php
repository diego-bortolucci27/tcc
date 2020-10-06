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
        <!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro de Alunos</title>
</head>
<body>
        <div class="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Sucesso</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            <div class="modal-body">
              <p>Cadastro realizado com sucesso!</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Home</button>
              <button type="button" class="btn btn-primary">Realizar novoc cadastros</button>
            </div>
          </div>
         </div>
        </div>
    </body>
    </html>
    <?php
    }
        else
        echo "Não foi possível concluir o cadastro!";
?>