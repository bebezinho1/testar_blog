<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = "a12408570@gmail.com"; // Substitua pelo e-mail do psicólogo
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $assunto = "Nova mensagem do site de " . $nome;
    $corpo = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        // Redireciona para a página de sucesso, evitando o reenvio
        header("Location: index.html?success=1");
        exit; // Garanta que o script pare aqui
    } else {
        // Redireciona para a página de erro
        header("Location: index.html?error=1");
        exit;
    }
}
?>

