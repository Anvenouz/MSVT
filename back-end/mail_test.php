<?php
require 'path-to-phpmailer/Exception.php';
require 'path-to-phpmailer/PHPMailer.php';
require 'path-to-phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'votre-adresse-email@gmail.com';
    $mail->Password = 'votre-mot-de-passe-ou-mot-de-passe-d-application';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Vous pouvez également utiliser PHPMailer::ENCRYPTION_SMTPS
    $mail->Port = 587; // Vous pouvez également utiliser 465 pour SSL


    $mail->setFrom('votre-adresse-email@gmail.com');
    $mail->addAddress('destinataire@example.com');
    $mail->Subject = 'Sujet de l\'e-mail';
    $mail->Body = 'Contenu de l\'e-mail';


    $mail->send();
    echo 'E-mail envoyé avec succès.';
} catch (Exception $e) {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
}
