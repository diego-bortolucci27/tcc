<?php
    include_once 'navbar.php';
    include_once 'head.php';
    include_once 'conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>

    <style>

        .titulo{
            font-size: 20pt;
            margin: 30px;
        }

        .cabeçalho{
            color: white;
        }

    </style>

</head>
<body>
    <div>
        <center>
            <h1 class="titulo"><b>Resultado da Pesquisa<b></h1>
        </center>
    </div>

    <div class="container-fluid">
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
            $pesquisar = $_POST['busca'];
            $exibir = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome LIKE '%$pesquisar%'");
            $exibir2 = mysqli_query($conexao, "SELECT * FROM alunos WHERE rm LIKE '%$pesquisar%'");
            
            while($row = mysqli_fetch_array($exibir)) {
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
                        <td class="table-active"><a href="infoAluno.php?rm=<?php echo $row['rm']; ?>">Ver Informações</a></td>
                    </tr>
                </tbody>
            
            <?php
            }
                while($row = mysqli_fetch_array($exibir2)) { 
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
                        <td class="table-active"><a href="infoAluno.php?rm=<?php echo $row['rm']; ?>">Ver Informações</a></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script src="web/javaScript/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>