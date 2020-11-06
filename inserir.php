<?php

  require_once 'conexao.php';
  require_once 'head.php';
  require_once 'navbar.php';

  //Receber os dados do formulário
//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
//var_dump($dados);

foreach($dados as $linha){
	$linha = trim($linha);
	$valor = explode(',', $linha);
	var_dump($valor);
	
	$rm1 = $valor[0];
	$digital1 = $valor[1];
	$nome1 = $valor[2];
  $serie1 = $valor[3];
  $curso1 = $valor[4];
  $telefone1 = $valor[5];
  $email1 = $valor[6];
  $nome_responsavel1 = $valor[7];
  $telefone_responsavel1 = $valor[8];
  $email_responsavel1 = $valor[9];
	
	$result_usuario = "INSERT INTO alunos (rm, digital, nome, serie, curso, telefone, email, nome_responsavel, telefone_responsavel, email_Responsavel)VALUES (
    '$rm1',
    '$digital1',
    '$nome1',
    '$serie1',
    '$curso1',
    '$telefone1',
    '$email1',
    '$nome_responsavel1',
    '$telefone_responsavel1',
    '$email_responsavel1
    ')";
	
	$resultado_usuario = mysqli_query($conexao, $result_usuario);	
}
$_SESSION['msg'] = "<p style='color: green;'>Carregado os dados com sucesso!</p>";

  $rm = $_POST['rm'];
  $digital = "456";
  $nome = $_POST['nome'];
  $serie = $_POST['serie'];
  $curso = $_POST['curso'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $nome_responsavel = $_POST['responsavel'];
  $telefone_responsavel = $_POST['telResponsavel'];
  $email_responsavel = $_POST['emailResponsavel'];

  $sql = "INSERT INTO alunos (rm, digital, nome, serie, curso, telefone, email, nome_responsavel, telefone_responsavel, email_Responsavel)VALUES (
  '$rm',
  '$digital',
  '$nome',
  '$serie',
  '$curso',
  '$telefone',
  '$email',
  '$nome_responsavel',
  '$telefone_responsavel',
  '$email_responsavel
  ')";

   $query = mysqli_query($conexao, $sql);

  if ($query)
  {
    echo "Cadastro realizado com sucesso";
  }
  else
  {
    echo "Não foi possível concluir o cadastro!";
  }
?>