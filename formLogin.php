<?php

    session_start();
    require_once 'conexao.php';
    require_once 'head.php';
    require_once 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <section>
            <?php
                if(isset($_SESSION['nao_autenticado'])):
                    echo '<p> ERRO: Usuário ou senha inválidos.</p>';
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
            <h1 style="text-align: center; font-size: 25pt; margin-top: 40px; margin-bottom: 40px;"><b>Login</b></h1>
            <div class="wrapper fadeInDown">
                <div id="formContent">
                  <!-- Login Form -->
                  <form method="POST" action="login.php">
                    <input type="text" id="email" class="fadeIn second" name="usuario" placeholder="Nome do Usuário">
                    <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
                    <input type="submit" class="fadeIn fourth" name="login" value="Login">
                  </form>
              
                  <!-- Remind Passowrd -->
                  <div id="formFooter">
                    <a class="underlineHover" href="esqueceuSenha.php">Esqueceu a senha?</a>
                  </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>