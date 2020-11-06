<?php

    require_once '../conexao.php';
    require_once '../head.php';
    require_once 'navbar.php';
    //require_once '../pesquisa.php';

    $sql = "SELECT * FROM alunos WHERE curso = 'ETIM ADMNISTRAÇÃO'";
    $query = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consulta.css">
    <title>Consulta</title>
</head>
<body>
<div class="container-fluid">
    <div>
        <center>
            <h1 class="titulo"><b>Consulta de Dados - ETIM ADMINISTRAÇÃO<b></h1>
        </center>
        <center>
        <form action="busca.php" method="POST">
            <div class="form-group col-md-6">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Função</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../consultaFuncionario.php">Funcionários</a>
                        <a class="dropdown-item" href="../consultaPublica.php">Alunos</a>
                    </div>
                </div>
            </div>
        </form>
    </center>
    </div>
    <div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Série
            </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="consulta1Adm.php">1º Ano</a>
            <a class="dropdown-item" href="consulta2Adm.php">2º Ano</a>
            <a class="dropdown-item" href="consulta3Adm.php">3º Ano</a>
        <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="consultaAdm.php">Ver ETIM ADM</a>
            <a class="dropdown-item" href="../info/consultaInfo.php">Ver ETIM INFO</a>
        </div>
    </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-danger">
            <tr class="cabeçalho">
                <th scope="col">RM</th>
                <th scope="col">Nome</th>
                <th scope="col">Série</th>
                <th scope="col">Curso</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Responsável</th>
                <th scope="col">Tel Responsável</th>
                <th scope="col">Email Responsável</th>
                <th scope="col">Ver infos</th>
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
                    <td class="table-active"> <?php echo $row['rm']; ?> </a> </td>
				    <td class="table-active"> <?php echo $row['nome']; ?> </td>
				    <td class="table-active"> <?php echo $row['serie']; ?> </td>
                    <td class="table-active"> <?php echo $row['curso']; ?> </td>
                    <td class="table-active"> <?php echo $row['telefone']; ?> </td>
                    <td class="table-active"> <?php echo $row['email']; ?> </td>
                    <td class="table-active"> <?php echo $row['nome_responsavel']; ?> </td>
                    <td class="table-active"> <?php echo $row['telefone_responsavel']; ?> </td>
                    <td class="table-active"> <?php echo $row['email_Responsavel']; ?> </td>
                    <td class="table-active"><a href="infoAluno.php?rm=<?php echo $row['rm'] ?>">Ver Informações</a></td>
                    <td class="table-active"><a href="delete.php?rm=<?php echo $row['rm'] ?>">Excluir</a></td>
                    <td class="table-active"><a href="alterar.php?rm=<?php echo $row['rm'];?>">Alterar</a></td>
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