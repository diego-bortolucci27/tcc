<?php

    include("head.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro</title>
</head>
<body>
    <div class="principal container-fluid">
        <h1>Cadastro</h1>
    <form action="web/inserir.php" method="post">
        <input type="hidden" name="id" id="id" value="">
        <div class="form-group col-md-6">
          <label for="nome">Nome Completo</label>
          <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu Nome Completo">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Digite o seu email">
        </div>
        <div class="form-group">
            <label for="email">Sexo</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino">
                <label class="form-check-label" for="sexo">Maculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Feminino">
                <label class="form-check-label" for="sexo">Feminino</label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="email">Data de Nascimento</label>
            <input type="text" class="form-control" id="dataNascimento" name="dataNascimento" placeholder="Ex: 01/01/1999">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Ex: (19)99999-9999">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Ex: (19)99999-9999">
        </div>
        <div class="form-group col-md-6">
            <label for="cep">Cep</label>
            <input type="number" class="form-control" id="cep">
        </div>
        <div class="form-group col-md-6">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select id="estado">
              <option>AC</option>
              <option>AL</option>
              <option>AP</option>
              <option>AM</option>
              <option>BA</option>
              <option>CE</option>
              <option>DF</option>
              <option>ES</option>
              <option>GO</option>
              <option>MA</option>
              <option>MT</option>
              <option>MS</option>
              <option>MG</option>
              <option>PA</option>
              <option>PB</option>
              <option>PR</option>
              <option>PE</option>
              <option>PI</option>
              <option>RJ</option>
              <option>RN</option>
              <option>RS</option>
              <option>RO</option>
              <option>RR</option>
              <option>SC</option>
              <option>SP</option>
              <option>SE</option>
              <option>TO</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
            <div class="form-group col-md-4">
              <label for="numero">Número</label>
              <input type="number" class="form-control" id="numero" name="numero">
            </div>
        </div>
        <div class="form-group">
            <label for="setor">Ocupação: </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="setor" id="setor" value="Aluno">
                <label class="form-check-label" for="setor">Aluno</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="setor" id="setor" value="Funcionário">
                <label class="form-check-label" for="setor">Funcionário</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="setor" id="setor" value="Administrador">
                <label class="form-check-label" for="setor">Administrador</label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="form-group col-md-6">
            <label for="senha">Confirme sua senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>


<script src="web/javaScript/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>