<?php

    require_once '../conexao.php';
    require_once '../head.php';

    $sql = "SELECT * FROM alunos 
    WHERE curso = 'ETIM ADMNISTRAÇÃO' AND serie = '1º Ano'";
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
    <div>
        <center>
            <h1 class="titulo"><b>Consulta de Dados - ETIM ADMINISTRAÇÃO - 1º Ano<b></h1>
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
			    </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
    <script src="web/javaScript/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>