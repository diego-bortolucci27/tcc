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
    <div>
        <center>
            <h1 class="titulo"><b>Funcionários<b></h1>
        </center>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-danger">
            <tr class="cabeçalho">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Função</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
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
			    </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>