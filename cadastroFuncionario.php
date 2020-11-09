<?php

    require_once 'head.php';
    require_once 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Novo Funcionário</title>
    <link rel="stylesheet" href="css/cadastro.css">

  <style> 

    label{
      font-weight: bolder;
      font-size: 20px;
    }

    .nolabel{
      font-weight: normal;
      font-size: 15px;
    }

  </style>

</head>
<body class="body">
    <div class="principal container-fluid" align="center" style="padding: 20px 0px;">
        <h1 style="color: black; font-size: 16pt; margin: 15px;"><b>Novo Funcionário</b></h1>
        <br>
    
    <form action="inserirFuncionario.php" method="POST">
        <br>
        <input type="hidden" name="id" value="">
        <br>
        <div class="form-group col-md-6">
          <label style="color: black;" for="nome">Nome Completo</label>
          <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="EX: Luís Eduardo Santos">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="funcao">Função</label>
            <select class="custom-select" id="funcao" name="funcao">
              <option style="color: black;" selected hidden>Função</option>
              <option style="color: black;" value="Secretaria">Secretaria</option>
              <option style="color: black;" value="Vigia">Vigia</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Ex: luis_santos@etec.sp.gov.br">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
        </div>
        <input type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-outline-primary">
    </form>
    </div>


<script src="web/javaScript/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>