<?php

//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$arquivo = $mensagem;

$emailenviar = "mail@campanhadecoracao.com.br";
$destino = $emailenviar;

// É necessário indicar que o formato do e-mail é html
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $nome <$email>";
//$headers .= "Bcc: $EmailPadrao\r\n";

/* $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=index.html'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  } */

if (mail($destino, $assunto, $arquivo, $headers)) {
    $msg = "Sua mensagem foi enviada com sucesso.";
} else {
    $msg = "Erro ao enviar mensagem.";
}

// Mostra a mensagem acima e redireciona para index.html
echo "<script>location.href='index.php'; alert('$msg');</script>";
?>
