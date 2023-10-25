<?php

// Récolte et traitement des données

$tableau_contact = [
    "contact_name",
    "contact_surname",
    "contact_email",
    "contact_phone",
    "contact_sujet",
    "contact_form_message"
];

$datas_input = [
    "Personne de contact (nom)",
    "Personne de contact (prénom)",
    "Personne de contact (email)",
    "Personne de contact (téléphone)",
    "Sujet",
    "Message"
];

$datas = [];

foreach ($tableau_contact as $t) {
    if (isset($_POST[$t])) {
        $secureData = htmlspecialchars($_POST[$t]);
        $datas[$t] = $secureData;
    } else {
        echo $datas_input[array_search($t, $tableau_contact)] . ": Champ manquant ! <br>";
    }
}

// Affectation des données sécurisées aux variables

$nom = $datas["contact_name"];
$prenom = $datas["contact_surname"];
$email = $datas["contact_email"];
$telephone = $datas["contact_phone"];
$sujet = $datas["contact_sujet"];
$message_text = $datas["contact_form_message"];

// MAIL POUR ASBL

// Variables header
$destinataireMSVT = "informationmsvt@gmail.com";
$mail_senderMSVT = "From: Site MSVT <siteMSVT@msvt.com>\r\n";
$replyMSVT = "Reply-To: $email\r\n";
$content_typeMSVT = "Content-Type: text/html; charset=utf-8\r\n";
$mailerMSVT = "X-Mailer: PHP/" . phpversion();

//Header
$headersMSVT = $mail_senderMSVT;
$headersMSVT .= $replyMSVT;
$headersMSVT .= $content_typeMSVT;
$headersMSVT .= $mailerMSVT;
$toMSVT = $destinataireMSVT;

//Objet et mail
$subjectMSVT = "Formulaire de contact";
$message_html_MSVT = "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        section {
            max-width: 800px;
            margin: 25px auto 15px auto;
            padding: 20px;
            background-color: #fafafa;
            border: 2px solid #3b3b3b;
            border-radius: 10px;
            
        }
        table {
            width: 75%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 2px solid rgba(0, 110, 0, 0.15);
            padding: 15px;
        }
        th, td {
            padding: 15px;
            border-bottom: 2px solid rgba(0, 110, 0, 0.15);
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            font-size: 25px;
            margin: 20px 0 40px 0;
            text-align: center;
            color:rgb(0, 110, 0);
        }
        strong {
            font-weight: bold;
        }
    </style>
    </head>
    <body>
        <section>
            <h1>Nouveau formulaire de contact</h1>
            <table>
                <tr>
                    <th><strong>Nom :</strong></th>
                    <td>$nom</td>
                </tr>
                <tr>
                    <th><strong>Prénom :</strong></th>
                    <td>$prenom</td>
                </tr>
                <tr>
                    <th><strong>E-mail :</strong></th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th><strong>Téléphone :</strong></th>
                    <td>$telephone</td>
                </tr>
                <tr>
                    <th><strong>Sujet :</strong></th>
                    <td>$sujet</td>
                </tr>
                <tr>
                    <th><strong>Fichier(s) :</strong></th>
                    <td>$fichier</td>
                </tr>
                <tr>
                    <th colspan=\"2\"><strong>Message:</strong></th>
                </tr>
                <tr>
                    <td colspan=\"2\">$message_text</td>
                </tr>
            </table>
        </section>
    </body>
</html>
";

//Envoi du mail
$mailSentMSVT = mail($toMSVT, $subjectMSVT, $message_html_MSVT, $headersMSVT);

// MAIL POUR USER

// Variables header
$mail_senderUser = "From: ASBL \"MSVT\" <info@msvt.be>\r\n";
$replyUser = "Reply-To: <info@msvt.be>\r\n";
$content_typeUser = "Content-Type: text/html; charset=utf-8\r\n";
$mailerUser = "X-Mailer: PHP/" . phpversion();

//Header
$headersUser = $mail_senderUser;
$headersUser .= $replyUser;
$headersUser .= $content_typeUser;
$headersUser .= $mailerUser;
$toUser = $email;

//Objet + message
$subjectUser = "Merci pour votre message !";
$message_html_User = "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <p>
            Merci pour votre message. Nous avons bien reçu votre demande et reviendrons vers vous dans les plus brefs délais.
        </p>
        <p>
            Bien cordialement,
        </p>
        <p>
            L'équipe de l'ASBL \"Maison des Sciences de la Vie et de la Terre\"<br>
            31, Rue d'Empire - 7034 Obourg <br>
            065/84 40 65<br>
            info@msvt.be<br>
            https://www.msvt.be
        </p>
    </body>
</html>

";
$mailSentUser = mail($toUser, $subjectUser, $message_html_User, $headersUser);

if ($mailSentMSVT && $mailSentUser) {
    header("Location: ../form_confirmation.php");
    exit();
} else {
    header("Location: ../form_echec_contact.php");
    exit();
}
