<?php

  require_once 'head.php';
  require_once 'navbar.php';
  require_once 'conexao.php'; 

  $id = $_GET['id'];

  $sql = "SELECT * FROM funcionarios WHERE id = '$id'";
  $query = mysqli_query($conexao, $sql);

  while($row = mysqli_fetch_array($query))
  {
    $nome = $row['nome'];
    $email = $row['email'];
    $funcao = $row['funcao'];
    $senha = $row['senha'];
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atualizar Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">

  <style> 

    label{
        font-weight: bolder;
        font-size: 20px;
    }

    .nolabel{
        font-weight: normal;
        font-size: 15px;
    }

    #input > * {
	    height: 1.3em;
    }

    #img {
	    cursor: pointer;
	    width: 30px;
	    height: 30px;
	    text-align: center;
	    margin-top: -35px;
	    margin-bottom: 20px;
    }

  </style>

    <script type="text/javascript">
		window.onload=function(){
			var input = document.querySelector('#input');
			var img = document.querySelector('#img');
			var visivel = false;
			img.addEventListener('mousedown', function () {
				visivel = true;
				input.type = 'text';
			});
			window.addEventListener('mouseup', function (e) {
				if (visivel) visivel = !visivel;
				input.type = 'password';
			});
		}
	</script>

</head>
<body class="body">
    <div class="principal container-fluid" align="center" style="padding: 20px 0px;">
        <h1 style="color: black; font-size: 16pt; margin: 15px;"><b>Atualizar Cadastro - Funcionário</b></h1>
        <br>
    
    <form action="processaUpdateFuncionario.php" method="POST">
        <br>
        <div class="form-group col-md-6">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <label style="color: black;" for="nome">Nome Completo</label>
          <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="funcao">Função</label>
            <select class="custom-select" id="funcao" name="funcao">
              <option style="color: black;" selected hidden>Função</option>
              <option style="color: black;" value="Secretaria">Secretaria</option>
              <option style="color: black;" value="Vigia">Vigia</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="responsavel">Senha</label>
          <input type="password" class="form-control" placeholder="Senha" required="required" minlength="10" maxlength="20" id="input" name="senha" value="<?php echo base64_decode($senha); ?>">
          <img draggable="false" src="http://i.stack.imgur.com/H9Sb2.png" alt="" id="img" align="right">
        </div>
        <input type="submit" value="Atualizar" class="btn btn-outline-danger">
    </form>
    </div>


<script src="web/javaScript/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>