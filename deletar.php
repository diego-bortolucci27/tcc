<?php

  require_once 'head.php';
  require_once 'conexao.php';
  require_once 'navbar.php';
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alterar.css">
    <title>Excluir</title>
</head>
<body>
<center>
        <h1 class="titulo"><b>Excluir Cadastro</b></h1>
    <form action="delete.php" method="POST">
        <div class="form-group col-md-6">
            <label for="rm"> <strong> RM </strong> </label>
            <input type="number" class="form-control" id="rm" name="rm" aria-describedby="emailHelp" placeholder="Digite o RM">
          </div>
          <input type="submit" value="Deletar" class="btn btn-danger">
      </form>
      </div>
    </form>
</center>
</body>
</html>