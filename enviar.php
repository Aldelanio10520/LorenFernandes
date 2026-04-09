<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Se usar Composer

$mail = new PHPMailer(true);

try {
    // Configurações do Servidor Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aldelanioleite@gmail.com';          // Seu e-mail Gmail
    $mail->Password   = 'wnud amik okkm cazv';       // A senha de 16 dígitos gerada
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Destinatário e Remetente
    $mail->setFrom('aldelanioleite@gmail.com', 'Meu Site Local');
    $mail->addAddress('aldelanioleite@gmail.com');     // E-mail do seu colega

    // Conteúdo do E-mail
    $mail->isHTML(true);
    $mail->Subject = 'Dados do Formulario HTML';
    $mail->Body    = "Nome: " . $_POST['nome'] . "<br>Mensagem: " . $_POST['mensagem'];

    $mail->send();
    echo 'E-mail enviado com sucesso para Aldelanio!';
} catch (Exception $e) {
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}