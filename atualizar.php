<?php

  require_once 'head.php';
  require_once 'conexao.php';
  require_once 'navbar.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/alterar.css">
    <title>Alterar cadastro</title>
</head>
<body>
  <div class="container-fluid">
    <center>
      <h1 class="titulo"><b>Alterar Cadastro</b></h1>
    </center>
    <form action="update.php" method="POST">
        <div class="form-group col-md-6">
            <input type="hidden" class="form-control" id="rm" name="rm" aria-describedby="emailHelp" placeholder="EX:99999">
          </div>
        <div class="form-group col-md-6">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Digite o Nome Completo">
          </div>
          <div class="form-group col-md-4">
            <label for="serie">Série</label>
            <input type="text" class="form-control" id="serie" name="serie" placeholder="Ex: 3º Ano">
          </div>
          <div class="form-group col-md-4">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="Ex: Etim Infoweb">
          </div>
          <div class="form-group col-md-6">
              <label for="telefone">Telefone</label>
              <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Ex: (19)99999-9999">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email">
          </div>
          <div class="form-group col-md-6">
            <label for="responsavel">Nome do Responsável</label>
            <input type="text" class="form-control" id="responsavel" name="responsavel" aria-describedby="emailHelp" placeholder="Digite o Nome do Responsável">
          </div>
          <div class="form-group col-md-6">
              <label for="telefoneResponsavel">Telefone Responsável</label>
              <input type="number" class="form-control" id="telResponsavel" name="telResponsavel" placeholder="Ex: (19)99999-9999">
          </div>
          <div class="form-group col-md-6">
            <label for="emailResponsavel">Email Responsável</label>
            <input type="text" class="form-control" id="emailResponsavel" name="emailResponsavel" placeholder="Digite o email do Responsável">
          </div>
          <input type="submit" value="Modificar" class="btn btn-primary">
      </form>
  </div>
</body>
</html>