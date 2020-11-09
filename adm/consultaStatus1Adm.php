<?php

    require_once '../head.php';
    require_once '../conexao.php';
    require_once 'navbar.php';

    $sql = "SELECT * FROM view_infoaluno 
    WHERE curso = 'ETIM ADMINISTRAÇÃO' AND serie = '1º Ano' ORDER BY entrada DESC";
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
            <h1 class="titulo"><b>Consulta - Alunos - ETIM ADMINISTRAÇÃO<b></h1>
        </center>
    </div>
    <div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Série
            </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href=".consultaStatus1Adm.php">1º Ano</a>
            <a class="dropdown-item" href="consultaStatus2Adm.php">2º Ano</a>
            <a class="dropdown-item" href="consultaStatus3Adm.php">3º Ano</a>
        <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="consultaStatusAdm.php">Ver ETIM ADM</a>
            <a class="dropdown-item" href="../info/consultaStatusInfo.php">Ver ETIM INFO</a>
        </div>
        </div>
        </div>
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
                <th scope="col">Entrada</th>
                <th scope="col">Saída</th>
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
                    <td class="table-active"> <?php echo $row['entrada']; ?> </td>
                    <td class="table-active"> <?php echo $row['saida']; ?> </td>
                    <td class="table-active"><a href="infoAluno.php?rm=<?php echo $row['rm'] ?>">Ver Informações</a></td>
			    </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>