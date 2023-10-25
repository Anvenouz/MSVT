<?php

// Traitement des données

$tableau_CN = [
    "first_CN",
    "last_CN",
    "email_CN",
    "phone_CN",
    "first_child_CN",
    "last_child_CN",
    "age_CN",
    "stage_CN",
    "garderie_AM",
    "garderie_PM",
    "message_CN"
];

$datas_input = [
    "Personne de contact (prénom)",
    "Personne de contact (nom)",
    "Personne de contact (email)",
    "Personne de contact (téléphone)",
    "Prénom de l'enfant",
    "Nom de l'enfant",
    "Age de l'enfant",
    "Stage souhaité",
    "garderie (matin)",
    "garderie (soir)",
    "Message"
];

$datas = [];

foreach ($tableau_CN as $t) {
    if (isset($_POST[$t])) {
        $secureData = htmlspecialchars($_POST[$t]);
        $datas[$t] = $secureData;
    } else {
        header("Location: ../form_echec.php");
        exit();
    }
}

// Donner variables simples aux éléments sécurisés

$nom = $datas["first_CN"];
$prenom = $datas["last_CN"];
$email = $datas["email_CN"];
$telephone = $datas["phone_CN"];
$nomEnfant = $datas["first_child_CN"];
$prenomEnfant = $datas["last_child_CN"];
$stage = $datas["stage_CN"];
$ageEnfant = $datas["age_CN"];
$garderieAM = $datas["garderie_AM"];
$garderiePM = $datas["garderie_PM"];
$message_text = $datas["message_CN"];

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

// Objet et message
$subjectMSVT = "Nouvelle réservation (stage CN)";
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
            <h1>Nouvelle réservation (stage CN)</h1>
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
                    <th><strong>Prénom (enfant) :</strong></th>
                    <td>$prenomEnfant</td>
                </tr>
                <tr>
                    <th><strong>Nom (enfant) :</strong></th>
                    <td>$nomEnfant</td>
                </tr>
                <tr>
                    <th><strong>Age :</strong></th>
                    <td>$ageEnfant</td>
                </tr>
                <tr>
                    <th><strong>Stage souhaité :</strong></th>
                    <td>$stage</td>
                </tr>
                <tr>
                    <th><strong>Garderie (matin) :</strong></th>
                    <td>$garderieAM</td>
                </tr>
                <tr>
                    <th><strong>Garderie (soir)</strong></th>
                    <td>$garderiePM</td>
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

// Envoi de mail
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
$subjectUser = "Merci pour votre demande de réservation !";
$message_html_User = "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <p>
            Bonjour M. $nom,
        </p>
        <p>
            Nous avons bien reçu votre demande de réservation pour le stage qui se déroulera du $stage.         
        </p>
        <section>
            <p>Votre réservation :</p>
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
                    <th><strong>Prénom (enfant) :</strong></th>
                    <td>$prenomEnfant</td>
                </tr>
                <tr>
                    <th><strong>Nom (enfant) :</strong></th>
                    <td>$nomEnfant</td>
                </tr>
                <tr>
                    <th><strong>Age :</strong></th>
                    <td>$ageEnfant</td>
                </tr>
                <tr>
                    <th><strong>Stage souhaité :</strong></th>
                    <td>$stage</td>
                </tr>
                <tr>
                    <th><strong>Garderie (matin) :</strong></th>
                    <td>$garderieAM</td>
                </tr>
                <tr>
                    <th><strong>Garderie (soir)</strong></th>
                    <td>$garderiePM</td>
                </tr>                                                                                      
                <tr>
                    <th colspan=\"2\"><strong>Message:</strong></th>
                </tr>
                <tr>
                    <td colspan=\"2\">$message_text</td>
                </tr>
            </table>
        </section>
        <p>
            <i>Si vous souhaitez modifier cette réservation, n'hésitez pas à nous contacter.</i>
        </p>
        <p>
            Nous avons le plaisir de vous confirmer que votre demande de réservation a bien été enregistrée. 
        </p>
        <p>
            Cependant, <strong> pour garantir la participation de votre enfant, nous vous invitons à procéder au paiement (80€ / enfant) dans les plus brefs délais</strong>. Après réception du paiement, nous vous transfererons la fiche médicale, les conditions générales, ainsi que la fiche d'autorisation de publication de photos. Ces documents devront obligatoirement <strong>être signés et rendus avant le début du stage</strong>.
        </p>
        <p>
            Vous trouverez ci-dessous les informations nécessaires pour effectuer le paiement:
        </p>
        <p>
            <ul>
                <li>NOM: ASBL \"MSVT\"</li>
                <li>IBAN: BE38 3701 1363 4072</li>
                <li>Communication: Nom et prénom de l'enfant + stage souhaité.</li>
            </ul>
        </p>
        <p>
            Une fois ce dernier effectué, merci de nous transmettre une preuve de paiement par mail à info@msvt.be
        </p>
        <p>
            À titre informatif et afin de garantir le bon déroulement de stage, nous vous prions de bien vouloir prévoir :
            <ul>
                <li>des vêtements confortables et adaptés aux conditions météorologiques</li>
                <li>des chaussures de marche ou des bottes sont nécessaires pour les espaces exterieurs</li>
                <li>un sac à dos contenant une gourde, un repas pour le midi et des collations</li>
                <li>des vêtements, chaussures et chaussettes de rechange (obligatoire)</li>
                <li>de la crème solaire (si nécessaire)</li>
            </ul>
        </p>
        <p>
            Nous vous remercions pour votre confiance et sommes impatients d'accueillir $prenomEnfant pour lui faire découvrir les merveilles des anciennes carrières.
        </p>
        <p>
            L'équipe de l'ASBL \"Maison des Sciences de la Vie et de la Terre\"<br>
            31, Rue d'Empire - 7034 Obourg <br>
            065/84 40 65<br>
            info@msvt.be<br>
            https://www.msvt.be
        </p>
    </body>
</html>";

$mailSentUser = mail($toUser, $subjectUser, $message_html_User, $headersUser);

// Redirections

if ($mailSentMSVT && $mailSentUser) {
    header("Location: ../form_confirmation.php");
    exit();
} else {
    header("Location: ../form_echec.php");
    exit();
};
