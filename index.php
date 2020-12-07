<?php

    include_once 'conexao.php';
    include_once 'head.php';
    //include_once 'navbar.php';
    // style="background-image: url(img/cps.jpeg);"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Página Inicial </title>
    <link rel="stylesheet" href="css/adm.css">
</head>
<body class="body" style="background-image: url(img/cps.jpeg);">
<div class="container-fluid corpo">
    <section>
        <div style="background: white; opacity: 0.7;">
            <h1 class="display-4">Página Inicial</h1>
            <p class="lead">Sistema De Controle</p>
            <hr class="my-4" >
            <a href="formLogin.php" style="color: black;">
                <img src="img/login2.png" alt="login" srcset="" style="width: 70px; height: 70px;">
                <p style="text-align: left; font-size: 15pt;">Fazer Login</p>
            </a>
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
                     Example split danger button>
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

    <div class="container" style="padding: 40px;">
        <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop">
        Consultar Cadastros
        </button>

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Consultar Cadastros</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="consultaAluno.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao">Alunos</button></a>
                        <br>
                        <a href="consultaFuncionario.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Funcionários</button></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <a href="pesquisa.php">
            <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop1">Pesquisar Registros
        </button></a>
        <br>

        <a href="controle.php">
            <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop1">Controle
        </button></a>
        <br>

        <a href="ajuda.php">
            <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop1">Ajuda
        </button></a>
        <br>

        <a href="adm.php">
            <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop1">Administrador
        </button></a>
        <br>

        <!--a href="adm.php">
            <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop1">Página do Administrador
        </button></a>
        <br-->

        <!--a href="https://wa.me/5519994425961?text=sua%20mensagem">Chamar no WhatsApp</a-->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>