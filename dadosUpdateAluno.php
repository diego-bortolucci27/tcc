<?php

  require_once 'head.php';
  require_once 'navbar.php';
  require_once 'conexao.php'; 

  $rm = $_GET['rm'];

  $sql = "SELECT * FROM alunos WHERE rm='$rm'";
  $query = mysqli_query($conexao, $sql);

  while($row = mysqli_fetch_array($query))
  {
    $nome = $row['nome'];
    $serie = $row['serie'];
    $curso = $row['curso'];
    $telefone = $row['telefone'];
    $email = $row['email'];
    $nome_responsavel = $row['nome_responsavel'];
    $telefone_responsavel = $row['telefone_responsavel'];
    $email_responsavel = $row['email_Responsavel'];
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

  </style>

<script type="text/javascript">
		function mascara(i,t){

			var v = i.value;

			if(isNaN(v[v.length-1])){
				i.value = v.substring(0, v.length-1);
				return;
			}

			if(t === "cel"){
				if (v.length === 1) i.value = "(" + i.value;
				if (v.length === 3) i.value += ") ";
				if(v[5] == 10){
					i.setAttribute("maxlength", "16");
					if (v.length === 11) i.value += "-";
				}else{
					i.setAttribute("maxlength", "15");
					if (v.length === 10) i.value += "-";
				}
			}
		}		

	</script>

</head>
<body class="body">
    <div class="principal container-fluid" align="center" style="padding: 20px 0px;">
        <h1 style="color: black; font-size: 16pt; margin: 15px;"><b>Atualizar Cadastro - Aluno</b></h1>
        <br>
    
    <form action="processaUpdateAluno.php" method="POST">
        <br>
        <div class="form-group col-md-6">
          <input type="hidden" name="rm" value="<?php echo $rm ?>">
          <label style="color: black;" for="nome">Nome Completo</label>
          <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="serie">Série</label>
            <select class="custom-select" id="serie" name="serie">
              <option style="color: black;" selected hidden>Série</option>
              <option style="color: black;" value="1º Ano">1º Ano</option>
              <option style="color: black;" value="2º Ano">2º Ano</option>
              <option style="color: black;" value="3º Ano">3º Ano</option>
            </select>

        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="curso">Curso</label>
          <div class="form-check" align="left">
            <input class="form-check-input" type="radio" name="curso" id="curso" value="ETIM INFOWEB">
              <label class="nolabel form-check-label" for="info" style="color: black;">
                ETIM INFOWEB
              </label>
          </div>
          <div class="form-check" align="left">
            <input class="form-check-input" type="radio" name="curso" id="curso" value="ETIM ADMNISTRAÇÃO">
              <label class="nolabel form-check-label" for="adm" style="color: black;">
                ETIM ADM
              </label>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label style="color: black;" for="telefone">Celular</label>
            <input oninput="mascara(this, 'cel')" type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone ?>">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="responsavel">Nome do Responsável</label>
          <input type="text" class="form-control" id="responsavel" name="responsavel" value="<?php echo $nome_responsavel ?>">
        </div>
        <div class="form-group col-md-6">
            <label style="color: black;" for="telefoneResponsavel">Celular Responsável</label>
            <input oninput="mascara(this, 'cel')" type="text" class="form-control" id="telResponsavel" name="telResponsavel" value="<?php echo $telefone_responsavel ?>">
        </div>
        <div class="form-group col-md-6">
          <label style="color: black;" for="emailResponsavel">Email Responsável</label>
          <input type="text" class="form-control" id="emailResponsavel" name="emailResponsavel" value="<?php echo $email_responsavel ?>">
        </div>
        <input type="submit" value="Atualizar" class="btn btn-outline-primary">
    </form>
    </div>


<script src="web/javaScript/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>