<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // coleta os dados do formulário
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    // configurações para o e-mail
    $destinatario = "juanpmad@outlook.com"; // e-mail do destinatário
    $assunto = "Nova mensagem do formulário de contato";
    $headers = "From: $email"; // e-mail do remetente
    
    // envia o e-mail
    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>