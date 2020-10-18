<?php

    include_once 'conexao.php';
    include_once 'head.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Página Inicial </title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="body" style="background-image: url(img/london.jpg);">
<div class="container-fluid corpo">
    <section>
        <div class="fixed-top">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4 center">Menu</h5><br>
                    <a class="text-white h4" href="index.php">Home</a><br>
                    <a class="text-white h4" href="consulta.php">Consulta</a><br>
                    <a class="text-white h4" href="pesquisa.php">Pesquisar</a><br>
                    <a class="text-white h4" href="info/consultaInfo.php">Etim Infoweb</a><br>
                    <a class="text-white h4" href="adm/consultaAdm.php">Etim Adm</a><br>
                    <a class="text-white h4" href="ajuda.php">Ajuda</a>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <div>
            <h1 class="display-4 cabecalho">Página Inicial</h1>
            <p class="lead subtitulo">Sistema De Controle</p>
            <hr class="my-4" >
        </div>
    </section>
    <!--
    <center>
    <h1 style="color: black;"> Mais Informações: </h1>
    
    <section class="container">
        <center>
        <div class="row" align="center">
            <div class="card" style="width: 40rem;" align="center">
                <div class="card-body">
                    <h5 class="card-title" style="color: black;font-size: 30px">Informações:</h5>
                    <p class="card-text" style="color: black;font-size: 20px">Funções</p>
                    <!-- Example split danger button>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger">Indice</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="cadastro.php">Cadastrar</a>
                        <a class="dropdown-item" href="consulta.php">Consulta</a>
                        <a class="dropdown-item" href="alterar.php">Alterar Cadastro</a>
                        <a class="dropdown-item" href="deletar.html">Excluir Cadastro</a>
                        <a class="dropdown-item" href="pesquisa.php">Pesquisar</a>
                        <a class="dropdown-item" href="info/consultaInfo.php">Etim Infoweb</a>
                        <a class="dropdown-item" href="adm/consultaAdm.php">Etim Adm</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </center>
    </section>
    </center>
    <br>
    -->
    <!--section class="container-fluid">
            <div class="jumbotron">
                <h1 class="display-4">Sistema de Controle de Entrada e Saída</h1>
                <p class="lead"> Sistema Administrativo</p>
                <hr class="my-4">
                <p>Cadastro | Consulta | Exclusão | Atualização de Dados</p><br>
                <a href="pesquisa.php">
                    <button type="button" class="btn btn-outline-primary">Pesquisar</button>
                </a>
            </div>
    </section-->

    <section class="container">
        <div class="row">
            <div class="card card border-success mb-3" style="width: 16rem">
                <img class="card-img-top" src="./img/cadastro-icone.jpg" alt="Imagem de Capa do Card" title="Cadastro" style="width: 200px; height: 200px; margin: auto;">
                <div class="card-body">
                    <h5 class="card-title">Fazer o Cadastro</h5>
                    <div class="btn-group">
                        <a href="cadastro.php">
                            <button type="button" class="btn btn-outline-success">Cadastrar</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="card card border-primary mb-3" style="width: 16rem">
                <img class="card-img-top" src="./img/consulta.png" alt="Imagem de Capa do Card" title="Consulta" style="width: 200px; height: 200px; margin: auto;">
                <div class="card-body">
                    <h5 class="card-title">Realizar Consulta de Dados</h5>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Consultar
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="consulta.php">Consulta de Todos os dados</a>
                          <a class="dropdown-item" href="info/consultaInfo.php">Etim Infoweb</a>
                          <a class="dropdown-item" href="adm/consultaAdm.php">Etim Adm</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card card border-info mb-3" style="width: 16rem">
                <img class="card-img-top" src="./img/alterar.png" alt="Imagem de Capa do Card" title="Alterar" style="width: 200px; height: 200px; margin: auto;">
                <div class="card-body">
                    <h5 class="card-title">Alterar Registro</h5>
                    <div class="btn-group">
                        <a href="atualizar.php">
                            <button type="button" class="btn btn-outline-info">Modificar</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card card border-danger mb-3" style="width: 16rem">
                    <img class="card-img-top" src="./img/escluir.png" alt="Imagem de Capa do Card" title="Deletar" style="width: 200px; height: 200px; margin: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Excluir Registro</h5>
                        <div class="btn-group">
                            <a href="deletar.php">
                                <button type="button" class="btn btn-outline-danger">Excluir</button>
                            </a>
                        </div>
                    </div>
                </div>
        </div>    
        </section>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>