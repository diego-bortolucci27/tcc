<?php

    session_start();
    include_once 'navbar.php';
?>
<p style="color: white;">
    <?php
        include_once 'verifica_login.php';
    ?>
</p>

<?php
    include_once 'conexao.php';

    include_once 'head.php';
?>

<!DOCTYPE html>
    <html lang="pt-br">
<head>
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="web/css/estilo.css">
        <link rel="stylesheet" href="web/css/grid.css">
        <link rel="stylesheet" href="web/css/reset.css">
        <link rel="stylesheet" href="css/adm.css">
    <title>ADMINISTRAÇÃO</title>
</head>
<body>
    <div class="container-fluid">
        <center>
            <h1 style="font-size: 30pt; padding: 40px 0px 0px 0px;"><b>Administração</b></h1>
        </center>
    </div>
    <div class="container" style="padding: 40px;">
        <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop">
        Adicionar Novo
        </button>

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Adicionar Novo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="cadastroAluno.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Novo Aluno</button></a>
                        <br>
                        <a href="cadastroFuncionario.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Novo Funcionário</button></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" data-toggle="modal" data-target="#staticBackdrop1">
        Exibir Cadastros
        </button>

        <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Exibir Cadastros</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="consultaAlunoAdmin.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Alunos</button></a>
                        <br>
                        <a href="consultaFuncionarioAdmin.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Funcionários</button></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Gerar relatórios</button>

        <br><br>

            <a href="https://wa.me/5519994425961?text=Olá,%20seu%20filho%20chegou%20atrasado%20na%20escola">
                <img src="img/Whatsapp_icon-icons.com_66931.png" alt="whatsapp" srcset="" style="width: 75px; height: 75px;">
                <p><b>Enviar Mensagem</b></p>
            </a>

    </div>

    <h2>
        <a href="logout.php">
            <img src="img/logout_3622.png" alt="logout" srcset="" style="width: 75px; width: 75px; position: relative; left: 1800px;">
            <p style="text-align: right; margin-right: 50px;">Sair</p>
        </a>
    </h2>
    
</body>
</html>