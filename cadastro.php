<?php

    require_once 'head.php';
    require_once 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body class="body">
    <div class="principal container-fluid">
        <h1 style="color: black; font-size: 16pt; margin: 15px;"><b>Cadastro dos Alunos</b></h1>
        <br>
    <form action="inserir.php" method="POST">
        <div class="form-group col-md-6">
            <label style="color: black;" for="rm">RM</label>
            <input type="number" class="form-control" id="rm" name="rm" placeholder="EX: 17170">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="nome">Nome Completo</label>
          <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="EX: Luís Eduardo Santos">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="serie">Série</label>
            <select class="custom-select" id="serie" name="serie">
              <option style="color: black;" selected hidden>Série</option>
              <option style="color: black;" value="1º ANO">1º ANO</option>
              <option style="color: black;" value="2º ANO">2º ANO</option>
              <option style="color: black;" value="3º ANO">3º ANO</option>
            </select>

        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="curso">Curso</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="curso" id="curso" value="ETIM INFOWEB">
              <label class="form-check-label" for="info" style="color: black;">
                ETIM INFOWEB
              </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="curso" id="curso" value="ETIM ADM">
              <label class="form-check-label" for="adm" style="color: black;">
                ETIM ADM
              </label>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label style="color: black;" for="telefone">Telefone</label>
            <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Ex: (19)99999-9999">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Ex: luis_santos@etec.sp.gov.br">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="responsavel">Nome do Responsável</label>
          <input type="text" class="form-control" id="responsavel" name="responsavel" aria-describedby="emailHelp" placeholder="Ex: Antônio Lopes Cardoso">
        </div>
        <div class="form-group col-md-6">
            <label style="color: black;" for="telefoneResponsavel">Telefone Responsável</label>
            <input type="number" class="form-control" id="telResponsavel" name="telResponsavel" placeholder="Ex: (19)99999-9999">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="emailResponsavel">Email Responsável</label>
          <input type="text" class="form-control" id="emailResponsavel" name="emailResponsavel" placeholder="Ex: antonio_cardoso@gmail.com">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-outline-primary">
    </form>
    </div>


<script src="web/javaScript/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>