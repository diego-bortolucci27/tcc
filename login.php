<?php
	session_start();
    require_once 'conexao.php';
    require_once 'head.php';

	// Verifica se o usuário digitou alguma coisa no formulário.

	if(empty($_POST['usuario']) || empty($_POST['senha']))
	{
		header('Location: formLogin.php');
		exit();
	}

	// mysqli_real_escape_string = É um função que protege ataque de SQL Injection contra o nosso Login. Essa função realiza alguma validações e verifica se esta vindo algum ataque de SQL Injection

	//$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$senhaCrip = base64_encode($senha);

	$query = "SELECT nome, senha FROM funcionarios WHERE usuario = '{$usuario}' AND senha = '{$senhaCrip}'";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);
	// Retorna a quantidade de linhas que o comando SELECT fez. Se retorna 1 linha, significa que o usuário e senha está correta e encontrou este usuário e senha no Banco de Dados. Se não retornou nenhuma linha, significa que não foi encontrado usuário e senha no BD, sendo isso, um resultado falso.
	
	if($row == 1)
	{
		$_SESSION['usuario'] = $usuario;
		header('Location: adm.php');
		exit();
	}

	else
	{
		$_SESSION['nao_autenticado'] = TRUE;
		header('Location: formLogin.php');
		exit();
	}
?>