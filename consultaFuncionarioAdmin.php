<?php

    require_once 'conexao.php';
    require_once 'head.php';
    require_once 'navbar.php';

    $sql = "SELECT * FROM funcionarios";
    $query = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/consulta.css">
    <title>Consulta</title>
</head>
<body>
<div class="container-fluid">
    <div>
        <center>
            <h1 class="titulo"><b>Consulta de Dados - Funcionários<b></h1>
        </center>
    </div>
    <center>
        <form action="busca.php" method="POST">
            <div class="form-group col-md-6">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Função</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="consultaFuncionarioAdmin.php">Funcionários</a>
                        <a class="dropdown-item" href="consultaAlunoAdmin.php">Alunos</a>
                    </div>
                </div>
            </div>
        </form>
    </center>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-danger">
            <tr class="cabeçalho">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Função</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Excluir</th>
                <th scope="col">Alterar</th>
            </tr>
            </thead>
            <?php
        
            while($row = mysqli_fetch_array($query))
            {
            ?>
            <tbody>
			    <tr>
                    <td class="table-active"> <?php echo $row['id']; ?> </a> </td>
				    <td class="table-active"> <?php echo $row['nome']; ?> </td>
				    <td class="table-active"> <?php echo $row['funcao']; ?> </td>
                    <td class="table-active"> <?php echo $row['email']; ?> </td>
                    <td class="table-active"> <?php echo $row['senha']; ?> </td>
                    <td class="table-active"><a href="deleteFuncionario.php?id=<?php echo $row['id']; ?>">Excluir</a></td>
                    <td class="table-active"><a href="dadosUpdateFuncionario.php?id=<?php echo $row['id'];?>">Alterar</a></td>
			    </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>