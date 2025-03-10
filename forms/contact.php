<?php
  // Endereço de e-mail para receber as mensagens
  $receiving_email_address = 'gustavobarros.tenorio@gmail.com';

  // Dados enviados pelo formulário
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $assunto = $_POST['subject'];
  $mensagem = $_POST['message'];

  // Configurar o cabeçalho do e-mail
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "Content-Type: text/plain; charset=utf-8";

  // Corpo da mensagem
  $body = "Nome: $nome\n";
  $body .= "Email: $email\n";
  $body .= "Mensagem:\n$mensagem\n";

  // Enviar o e-mail
  if (mail($receiving_email_address, $assunto, $body, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Falha ao enviar a mensagem.";
  }
?>
