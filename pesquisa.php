<?php

    require_once "head.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
</head>
<body>
    <div class="container-fluid">
        <div class="titulo">
            <center>
                <h1 class="h1">Pesquisar</h1>
            </center>
        </div>
        <div>
            <center>
                <form action="busca.php" method="post">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="busca" name="busca" placeholder="Digite o nome completo"><br>
                        <input type="submit" value="Pesquisar" class="btn btn-primary">
                    </div>
                </form>
            </center>
        </div>
    </div>
</html>