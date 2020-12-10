<?php

    require_once 'conexao.php';
    require_once 'head.php';
    require_once 'navbar.php';

    $sql = "SELECT * FROM alunos";
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
            <h1 class="titulo"><b>Consulta de Dados - Alunos<b></h1>
        </center>
    </div>
    <center>
        <form action="busca.php" method="POST">
            <div class="form-group col-md-6">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Função</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="consultaFuncionario.php">Funcionários</a>
                        <a class="dropdown-item" href="consultaPublica.php">Alunos</a>
                    </div>
                </div>
            </div>
        </form>
    </center>
    <div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Curso
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="adm/consultaAdm.php">Ver ETIM ADM</a>
                <a class="dropdown-item" href="info/consultaInfo.php">Ver ETIM INFO</a>
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
                    <td class="table-active"> <img src="img/zap.png" alt="whatsapp" style="width: 28px; height: 28px;"> <a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo $row['telefone_responsavel']?>?text="> <?php echo $row['telefone_responsavel']; ?> </a></td>
                    <td class="table-active"> <?php echo $row['email_Responsavel']; ?> </td>
                    <td class="table-active"><a href="infoAluno.php?rm=<?php echo $row['rm'] ?>">Ver Informações</a></td>
			    </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>


<!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script-->
</body>
</html>