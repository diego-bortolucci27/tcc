<?php

    require_once 'navbar.php';
    require_once 'head.php';

?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <title>Ajuda</title>
 </head>
 <body>
  <!-- INFO 1 -->
<divs>

  <div class="jumbotron jumbotron-fluid" style='background-color: #DC300B;'>
  <div class="container.fluid">
    <h1 class="display-4" class="ajuda_sobre" style='text-align:center; color:white;'>Que tal nos conhecer melhor?!</h1>
    <h2 class="display-5" class="ajuda_sobre" style='text-align:left; color:white; margin-left: 40px;''>Sobre nós </h2>
    <p class="lead" style='color:white; margin:25px;'>Olá, nos somos alunos do 3º Ano do modulo ETIM Informática para Internet na escola ETEC Prof Jadyr Salles, localizada em Porto Ferreira(SP). Nosso grupo tem por principal objetivo melhorar nossa escola, seja para aqueles que estudam nela, tanto para aqueles que vierem a estudar nela nos proximos anos. Com ajuda de uma equipe de professores altamente capacitados nos ajudando, seguimos buscando nossos objetivos com o maximo de empenho, enquanto tentamos a cada dia, ser a melhor versão de nós mesmos, com humildade e uma insaciavel sede de sempre estarmos mehorando tanto no profissional quanto no pessoal!</p>
  </div>
</div>

   <!-- FIM INFO 1-->
<section class="sobre_projeto"> 
  <div class="jumbotron jumbotron-fluid" style='background-color: white;'>
    <div class="container.fluid">
      <h2 class="display-5" class="ajuda_sobre" style='text-align:left; color:#DC300B; margin-left: 40px;'>Sobre o projeto </h2>
      <p class="lead" style='color:#DC300B; margin:25px;'>Como ja dito anteriormente, nosso grupo tem como objetivo melhorar cada vez mais nossa escola, e é claro que isso se refletiria nos nossos projetos! O Sistema de Controle de Entrada e Saída dos alunos, tem por principal objetivo melhorar a segurança da escola para alunos que a frequentam e também para o conforto dos pais, pois com esse sistema, eles saberão a hora exata em que os filhos entram e saem da escola através de uma mensagem de texto que sera enviada para os mesmos. O projeto também auxiliará os funcionarios da escola, com a possibilidade de obter um relatório com as informações de entrada e saido dos alunos</p>
    </div>
  </div>
</section>

<!--section>
<center>
    <h1 style="text-align: center; font-size: 16pt;"><b>Envie a sua pergunta</b></h1><br>
<form method="POST" action="help.php">
  <div class="form-group">
    <label for="email">Endereço de email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" style="width: 900px;">
  </div>
  <div class="form-group">
    <center>
        <label for="texto">Digite a sua pergunta</label>
        <textarea class="form-control" id="texto" name="texto" rows="3" style="width: 900px;"></textarea><br>
        <input type="submit" class="btn btn-outline-danger" name="btnEnviar" value="Enviar">
    </center>
  </div>
</form>
</center>
</section>

<br><br>


    <form method="post" action="help.php" name="Inputform">
        <table border="0" width="50%">
            <tr>
                <td width="48%" align="right">DE:</td>
                <td width="52%"><input type="text" name="from" size="20" style="width:100%;" /></td>
            </tr>
            <tr>
                <td width="48%" align="right">ASSUNTO:</td>
                <td width="52%"><input type="text" name="assunto" size="20" style="width:100%;" /></td>
            </tr>
            <tr>
                <td width="48%" align="right">MENSAGEM:</td>
                <td width="52%"><textarea rows="4" name="mensagem" cols="26" style="width:100%;"></textarea></td>
            </tr>
            <tr>
                <td width="100%" align="center" colspan="2"><input type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>
  
<br><br-->



<br><br>

    <!--contato-->
    <div class="jumbotron jumbotron-fluid footer" style='background-color: #DC300B; margin-top: -25px; height: 400px;'>
        <div class="container.fluid">
        <h1 class="display-4 ajuda_sobre" style='color:white; text-align: center; font-size: 30px; float: none;'>CONTATO</h1>
        </div>
            <!-- tabela --> 
     <section>       
    <section class="tabela" style='width: 450px;height:auto; margin-left: 25px; margin-top: -30px; float:left;'>  
    <table class="table" style='color:white'>
  <tbody>
    <tr>
      <th scope="row">Diego Lopes Bortolucci</th>
      <td>bortolucci.diego@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">Filipi Henrique Pérez</th>
      <td>hueh109@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">Marcus Andreoli</th>
      <td>marcus.vinicius2002@hotmail.com</td>
    </tr>
    <tr>
      <th scope="row">Viniciús Gabriel Freitas</th>
      <td>viniciusgabriel18.05@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">Vitor Ádrian Vieira</th>
      <td>addrianvitor99@gmail.com</td>
    </tr>
  </tbody>
</table>
    <!-- fim tabela --> 
    </section>
 
            <!-- fim tabela --> 

        </section>

        <!-- Info Escola-->

          <section class="info_escola" style='float: right; margin-top:-15px; margin-right: 55px;'> 
          <section class="tabela" style='width: 450px;height:auto; margin-left: 20px;'>  
    <table class="table" style='color:white'>
  <tbody>
    <tr>
      <th scope="row" style="text-align: center;">ETEC PROF. JADYR SALLES</th>
    </tr>
    <tr>
      <th scope="row" style="text-align: center;">Av. Prof. Henrique da M. F. Jr., nº 849 - Centro, Porto Ferreira - SP, 13660-000
</th>
    </tr>
    <tr>
      <th scope="row" style="text-align: center;">Tel: (19) 3589-1732</th>
    </tr>
    <tr>
      <th scope="row" style="text-align: center;">3º ETIM INFORMÁTICA PARA INTERNET</th>
    </tr>
    <tr>
      <th scope="row" style="text-align: center;">2020</th>
    </tr>
  </tbody>
</table>
          </section>
  </section>

    </div>
    <!--fim contato-->
</div>
 </body>
 </html>