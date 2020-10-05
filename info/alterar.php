<?php

  require_once '../head.php';
  require_once '../conexao.php';

  $rm = $_GET['rm'];

  $sql = "SELECT * FROM alunos WHERE rm = $rm";
  $query = mysqli_query($conexao, $sql);

  while($row = mysqli_fetch_array($query))
  {
    $nome = $row['nome'];
    $serie = $row['serie'];
    $curso = $row['curso'];
    $telefone = $row['telefone'];
    $email = $row['email'];
    $nome_responsavel = $row['nome_responsavel'];
    $telefone_responsavel = $row['telefone_responsavel'];
    $email_responsavel = $row['email_Responsavel'];
  }

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
            <input type="hidden" class="form-control" id="rm" name="rm" aria-describedby="emailHelp" placeholder="EX:99999" value="<?php echo $rm; ?>">
          </div>
        <div class="form-group col-md-6">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Digite o Nome Completo" value="<?php echo $nome; ?>">
          </div>
          <div class="form-group col-md-4">
            <label for="serie">Série</label>
            <input type="text" class="form-control" id="serie" name="serie" placeholder="Ex: 3º Ano" value="<?php echo $serie; ?>">
          </div>
          <div class="form-group col-md-4">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="Ex: Etim Infoweb" value="<?php echo $curso; ?>">
          </div>
          <div class="form-group col-md-6">
              <label for="telefone">Telefone</label>
              <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Ex: (19)99999-9999" value="<?php echo $telefone; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="responsavel">Nome do Responsável</label>
            <input type="text" class="form-control" id="responsavel" name="responsavel" aria-describedby="emailHelp" placeholder="Digite o Nome do Responsável" value="<?php echo $nome_responsavel; ?>">
          </div>
          <div class="form-group col-md-6">
              <label for="telefoneResponsavel">Telefone Responsável</label>
              <input type="number" class="form-control" id="telResponsavel" name="telResponsavel" placeholder="Ex: (19)99999-9999" value="<?php echo $telefone_responsavel; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="emailResponsavel">Email Responsável</label>
            <input type="text" class="form-control" id="emailResponsavel" name="emailResponsavel" placeholder="Digite o email do Responsável" value="<?php echo $email_responsavel; ?>">
          </div>
          <input type="submit" value="Modificar" class="btn btn-primary">
      </form>
  </div>
</body>
</html>