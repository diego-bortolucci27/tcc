<?php
// e-mail para receber os dados do formulario
// insira uma conta de e-mail valida em sua hospedagem
$destino = "bortolucci.diego@gmail.com";
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
$remetente = $destino;
$mensagem = $_POST['mensagem'];
$subject = $_POST['assunto'];
$origem = $_POST['from'];
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: " . $remetente . "\n";
$headers .= "Reply-To: " . $origem . "\n";
if(mail($destino, $subject, $mensagem, $headers))
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
?>