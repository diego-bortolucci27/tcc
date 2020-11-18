<?php

    require_once "../conexao.php";
    require_once "../head.php";
    require_once 'navbar.php';

    $rm = $_GET['rm'];
    //echo "RM: " . $rm;

    $sql = "SELECT * FROM view_infoaluno 
    WHERE rm = $rm
    ORDER BY entrada DESC";
    $query = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/consulta.css">
    <title>Informações do Aluno</title>
</head>
<body>
    <div>
        <center>
            <h1 class="titulo"><b>Informações do Aluno<b></h1>
        </center>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-danger">
            <tr class="cabeçalho" style="color: white">
                <th scope="col">RM</th>
                <th scope="col">Nome</th>
                <th scope="col">Série</th>
                <th scope="col">Curso</th>
                <th scope="col">Entrada</th>
                <th scope="col">Saída</th>
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
			    </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>