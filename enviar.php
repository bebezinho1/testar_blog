<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = "contato@drasilva.com"; // Substitua pelo e-mail do psicólogo
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $assunto = "Nova mensagem do site de " . $nome;
    $corpo = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar. Tente novamente.'); window.location.href = 'index.html';</script>";
    }
}
?>