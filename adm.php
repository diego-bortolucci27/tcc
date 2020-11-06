<?php

    include_once 'conexao.php';
    include_once 'navbar.php';
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
        <a href="cadastro.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao">Adicionar Novo</button></a>
        <br>
        <a href="infoUpdate.php"><button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Exibir Cadastros</button></a>
        <br>
        <button type="button" class="btn btn-primary btn-lg btn-block border border-light" id="botao" >Gerar relatórios</button>
    </div>
    
</body>
</html>